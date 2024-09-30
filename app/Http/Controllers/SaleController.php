<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\User;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SaleController extends Controller
{
    /**
     * Mostrar una lista de todas las ventas.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::with(['user', 'paymentMethod'])->get();
        return response()->json($sales);
    }

    /**
     * Mostrar el formulario para crear una nueva venta.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Puedes retornar una vista con un formulario de creación si es necesario.
    }

    /**
     * Almacenar una nueva venta en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'total' => 'required|numeric|min:0',
            'sale_date' => 'required|date',
            'payment_method_id' => 'required|exists:payment_methods,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $sale = Sale::create([
            'user_id' => $request->user_id,
            'total' => $request->total,
            'sale_date' => $request->sale_date,
            'payment_method_id' => $request->payment_method_id,
        ]);

        return response()->json($sale, 201);
    }

    /**
     * Mostrar los detalles de una venta específica.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sale = Sale::with(['user', 'paymentMethod'])->find($id);

        if (!$sale) {
            return response()->json(['message' => 'Sale not found'], 404);
        }

        return response()->json($sale);
    }

    /**
     * Mostrar el formulario para editar una venta existente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Puedes retornar una vista con un formulario de edición si es necesario.
    }

    /**
     * Actualizar una venta existente en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'sometimes|required|exists:users,id',
            'total' => 'sometimes|required|numeric|min:0',
            'sale_date' => 'sometimes|required|date',
            'payment_method_id' => 'sometimes|required|exists:payment_methods,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $sale = Sale::find($id);

        if (!$sale) {
            return response()->json(['message' => 'Sale not found'], 404);
        }

        $sale->update([
            'user_id' => $request->user_id ?? $sale->user_id,
            'total' => $request->total ?? $sale->total,
            'sale_date' => $request->sale_date ?? $sale->sale_date,
            'payment_method_id' => $request->payment_method_id ?? $sale->payment_method_id,
        ]);

        return response()->json($sale);
    }

    /**
     * Eliminar una venta específica de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sale = Sale::find($id);

        if (!$sale) {
            return response()->json(['message' => 'Sale not found'], 404);
        }

        $sale->delete();

        return response()->json(['message' => 'Sale deleted successfully']);
    }
}

