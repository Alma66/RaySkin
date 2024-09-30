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
        $reviews = Review::with(['pack', 'user'])->get();
        return response()->json($reviews);
    }

    /**
     * Mostrar el formulario para crear una nueva reseña.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Puedes retornar una vista con un formulario de creación si es necesario.
    }

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
            return response()->json($validator->errors(), 422);
        }

        $review = Review::create([
            'pack_id' => $request->pack_id,
            'user_id' => $request->user_id,
            'rating' => $request->rating,
            'comment' => $request->comment,
            'review_date' => $request->review_date,
        ]);

        return response()->json($review, 201);
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
            return response()->json(['message' => 'Review not found'], 404);
        }

        return response()->json($review);
    }

    /**
     * Mostrar el formulario para editar una reseña existente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Puedes retornar una vista con un formulario de edición si es necesario.
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
            return response()->json($validator->errors(), 422);
        }

        $review = Review::find($id);

        if (!$review) {
            return response()->json(['message' => 'Review not found'], 404);
        }

        $review->update([
            'pack_id' => $request->pack_id ?? $review->pack_id,
            'user_id' => $request->user_id ?? $review->user_id,
            'rating' => $request->rating ?? $review->rating,
            'comment' => $request->comment ?? $review->comment,
            'review_date' => $request->review_date ?? $review->review_date,
        ]);

        return response()->json($review);
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
            return response()->json(['message' => 'Review not found'], 404);
        }

        $review->delete();

        return response()->json(['message' => 'Review deleted successfully']);
    }
}

