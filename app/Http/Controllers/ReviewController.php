<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Pack;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    /**
     * Mostrar una lista de todas las reseñas.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Review::query()->with(['pack', 'user']);

        // Filtrado
        if ($request->has('pack_id')) {
            $query->where('pack_id', $request->input('pack_id'));
        }

        if ($request->has('user_id')) {
            $query->where('user_id', $request->input('user_id'));
        }

        if ($request->has('rating')) {
            $query->where('rating', $request->input('rating'));
        }

        if ($request->has('review_date')) {
            $query->whereDate('review_date', $request->input('review_date'));
        }

        // Paginación
        $reviews = $query->paginate(10); // Paginación de 10 reseñas por página

        // Obtener listas para filtros
        $packs = Pack::all();
        $users = User::all();

        return view('review.showAll', compact('reviews', 'packs', 'users'));
    }

    /**
     * Mostrar el formulario para crear una nueva reseña.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packs = Pack::all();
        $users = User::all();
        return view('review.create', compact('packs', 'users'));    }

    /**
     * Almacenar una nueva reseña en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pack_id' => 'required|exists:packs,id',
            'user_id' => 'required|exists:users,id',
            'rating' => 'required|integer|between:1,5',
            'comment' => 'nullable|string|max:1000',
            'review_date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->route('reviews.create')
                             ->withErrors($validator)
                             ->withInput();
        }

        Review::create([
            'pack_id' => $request->pack_id,
            'user_id' => $request->user_id,
            'rating' => $request->rating,
            'comment' => $request->comment,
            'review_date' => $request->review_date,
        ]);

        return redirect()->route('reviews.showAll')->with('success', 'Review created successfully');
    }

    /**
     * Mostrar los detalles de una reseña específica.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = Review::with(['pack', 'user'])->find($id);

        if (!$review) {
            return redirect()->route('reviews.showAll')
            ->with('error', 'Review not found');
            }

            return view('review.show', compact('review'));
    }

    /**
     * Mostrar el formulario para editar una reseña existente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::find($id);

        if (!$review) {
            return redirect()->route('reviews.showAll')
                             ->with('error', 'Review not found');
        }

        $packs = Pack::all();
        $users = User::all();

        return view('review.edit', compact('review', 'packs', 'users'));
        }

    /**
     * Actualizar una reseña existente en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'pack_id' => 'sometimes|required|exists:packs,id',
            'user_id' => 'sometimes|required|exists:users,id',
            'rating' => 'sometimes|required|integer|between:1,5',
            'comment' => 'nullable|string|max:1000',
            'review_date' => 'sometimes|required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->route('reviews.edit', $id)
                             ->withErrors($validator)
                             ->withInput();
        }

        $review = Review::find($id);

        if (!$review) {
            return redirect()->route('reviews.showAll')
                             ->with('error', 'Review not found');
        }
        $review->update([
            'pack_id' => $request->pack_id ?? $review->pack_id,
            'user_id' => $request->user_id ?? $review->user_id,
            'rating' => $request->rating ?? $review->rating,
            'comment' => $request->comment ?? $review->comment,
            'review_date' => $request->review_date ?? $review->review_date,
        ]);

        return redirect()->route('reviews.show', $id)->with('success', 'Review updated successfully');
    }

    /**
     * Eliminar una reseña específica de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::find($id);

        if (!$review) {
            return redirect()->route('reviews.showAll')
                             ->with('error', 'Review not found');
        }

        $review->delete();

        return redirect()->route('reviews.showAll')->with('success', 'Review deleted successfully');
    }
}

