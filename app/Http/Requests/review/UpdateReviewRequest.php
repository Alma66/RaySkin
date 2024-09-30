<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReviewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize()
    {
        return true; // Cambiado a true para permitir la solicitud
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $reviewId = $this->route('review');

        return [

                'user_id' => 'sometimes|required|exists:users,id',
                'rating' => 'sometimes|required|integer|between:1,5',
                'comment' => 'nullable|string|max:1000',
                'review_date' => 'sometimes|required|date',
                'product_id' => 'sometimes|required|exists:packs,id',
        ];
    }

     /**
     * Get custom attribute names for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
            return [

                'user_id' => 'User ID',
                'rating' => 'rating',
                'comment' => 'comment',
                'review_date' => 'review date',
                'product_id' => 'product ID',

        ];
    }
}
