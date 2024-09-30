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
    public function index(Request $request)
    {
        $query = Review::query()->with(['product', 'user']);

        // Filtrado

        if ($request->has('user_id')) {
            $query->where('user_id', $request->input('user_id'));
        }

        if ($request->has('rating')) {
            $query->where('rating', $request->input('rating'));
        }

        if ($request->has('review_date')) {
            $query->whereDate('review_date', $request->input('review_date'));
        }
        if ($request->has('product_id')) {
            $query->where('product_id', $request->input('product_id'));
        }

        // Paginación
        $reviews = $query->paginate(10); // Paginación de 10 reseñas por página

        // Obtener listas para filtros
        $product = Product::all();
        $users = User::all();

        return view('review.showAll', compact('reviews', 'products', 'users'));
    }

    /**
     * Mostrar el formulario para crear una nueva reseña.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        $users = User::all();
        return view('review.create', compact('productS', 'users'));    }

    /**
     * Almacenar una nueva reseña en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReviewRequest $request)
{
    $validatedData = $request->validated();

    $review = Review::create([
        'user_id' => $validatedData['user_id'],
        'rating' => $validatedData['rating'],
        'comment' => $validatedData['comment'],
        'review_date' => $validatedData['review_date'],
        'product_id' => $validatedData['product_id'],
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
        $review = Review::with(['product', 'user'])->find($id);

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

        $producTS = Products::all();
        $users = User::all();

        return view('review.edit', compact('review', 'products', 'users'));
        }

    /**
     * Actualizar una reseña existente en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReviewRequest $request, $id)
    {
        $validatedData = $request->validated();

        $review = Review::find($id);

        if (!$review) {
            return redirect()->route('reviews.showAll')
                             ->with('error', 'Review not found');
        }
        $review->update([

            'user_id' => $validatedData['user_id'] ?? $sale->user_id,
            'rating' => $validatedData['rating'] ?? $sale->rating,
            'comment' => $validatedData['comment'] ?? $sale->comment,
            'review_date' => $validatedData['review_date'] ?? $sale->review_date,
            'product_id' => $validatedData['product_id'] ?? $sale->product_id,
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

