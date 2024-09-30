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
        $query = PaymentMethod::query();

        // Filtrado
        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        // Paginación
        $paymentMethods = $query->paginate(10); // Paginación de 10 métodos por página

        return view('paymentMethod.showAll', compact('paymentMethods'));
    }

    /**
     * Mostrar el formulario para crear un nuevo método de pago.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paymentMethod.create');    }

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
            return redirect()->route('paymentMethods.create')
                             ->withErrors($validator)
                             ->withInput();
        }

        PaymentMethod::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('paymentMethods.showAll')->with('success', 'Payment method created successfully');
    }    /**
     * Mostrar los detalles de un método de pago específico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paymentMethod = PaymentMethod::find($id);

        if (!$paymentMethod) {
            return redirect()->route('paymentMethods.showAll')
                             ->with('error', 'Payment method not found');
        }

        return view('paymentMethod.show', compact('paymentMethod'));
     }

    /**
     * Mostrar el formulario para editar un método de pago existente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paymentMethod = PaymentMethod::find($id);

        if (!$paymentMethod) {
            return redirect()->route('paymentMethods.showAll')
                             ->with('error', 'Payment method not found');
        }

        return view('paymentMethod.edit', compact('paymentMethod'));    }

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
            return redirect()->route('paymentMethods.edit', $id)
                             ->withErrors($validator)
                             ->withInput();
        }

        $paymentMethod = PaymentMethod::find($id);

        if (!$paymentMethod) {
            return redirect()->route('paymentMethods.showAll')
                             ->with('error', 'Payment method not found');
        }

        $paymentMethod->update([
            'name' => $request->name ?? $paymentMethod->name,
            'description' => $request->description ?? $paymentMethod->description,
        ]);

        return redirect()->route('paymentMethods.show', $id)->with('success', 'Payment method updated successfully');
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
            return redirect()->route('paymentMethods.showAll')
                             ->with('error', 'Payment method not found');
        }

        $paymentMethod->delete();

        return redirect()->route('paymentMethods.showAll')->with('success', 'Payment method deleted successfully');
    }
}
