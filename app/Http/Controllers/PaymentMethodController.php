<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaymentMethodController extends Controller
{
    /**
     * Mostrar una lista de todos los métodos de pago.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paymentMethods = PaymentMethod::all();
        return response()->json($paymentMethods);
    }

    /**
     * Mostrar el formulario para crear un nuevo método de pago.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Puedes retornar una vista con un formulario de creación si es necesario.
    }

    /**
     * Almacenar un nuevo método de pago en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $paymentMethod = PaymentMethod::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return response()->json($paymentMethod, 201);
    }

    /**
     * Mostrar los detalles de un método de pago específico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paymentMethod = PaymentMethod::find($id);

        if (!$paymentMethod) {
            return response()->json(['message' => 'Payment method not found'], 404);
        }

        return response()->json($paymentMethod);
    }

    /**
     * Mostrar el formulario para editar un método de pago existente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Puedes retornar una vista con un formulario de edición si es necesario.
    }

    /**
     * Actualizar un método de pago existente en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $paymentMethod = PaymentMethod::find($id);

        if (!$paymentMethod) {
            return response()->json(['message' => 'Payment method not found'], 404);
        }

        $paymentMethod->update([
            'name' => $request->name ?? $paymentMethod->name,
            'description' => $request->description ?? $paymentMethod->description,
        ]);

        return response()->json($paymentMethod);
    }

    /**
     * Eliminar un método de pago específico de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paymentMethod = PaymentMethod::find($id);

        if (!$paymentMethod) {
            return response()->json(['message' => 'Payment method not found'], 404);
        }

        $paymentMethod->delete();

        return response()->json(['message' => 'Payment method deleted successfully']);
    }
}
