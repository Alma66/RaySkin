<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSaleRequest extends FormRequest
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
        $userId = $this->route('user');

        return [
            'user_id' => 'sometimes|required|exists:users,id',
            'total' => 'sometimes|required|numeric|min:0',
            'sale_date' => 'sometimes|required|date',
            'payment_method_id' => 'sometimes|required|exists:payment_methods,id',
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
            'user_id' => 'user ID',
            'total' => 'total amount',
            'sale_date' => 'sale date',
            'payment_method_id' => 'payment method ID',
        ];
    }
}
