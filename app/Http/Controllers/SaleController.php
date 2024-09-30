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
    public function index(Request $request)
    {
        $query = Sale::query()->with(['user', 'paymentMethod']);

        // Filtrado
        if ($request->has('user_id')) {
            $query->where('user_id', $request->input('user_id'));
        }

        if ($request->has('payment_method_id')) {
            $query->where('payment_method_id', $request->input('payment_method_id'));
        }

        if ($request->has('sale_date')) {
            $query->whereDate('sale_date', $request->input('sale_date'));
        }

        // Paginación
        $sales = $query->paginate(10); // Paginación de 10 ventas por página

        // Obtener listas para filtros
        $users = User::all();
        $paymentMethods = PaymentMethod::all();

        return view('sale.showAll', compact('sales', 'users', 'paymentMethods'));
    }

    /**
     * Mostrar el formulario para crear una nueva venta.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $paymentMethods = PaymentMethod::all();
        return view('sale.create', compact('users', 'paymentMethods'));    }

    /**
     * Almacenar una nueva venta en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSaleRequest $request)
    {
        $validatedData = $request->validated();

        $sale =  Sale::create([
            'user_id' => $validatedData['user_id'],
            'total' => $validatedData['total'],
            'sale_date' => $validatedData['sale_date'],
            'payment_method_id' => $validatedData['payment_method_id'],
        ]);

        return redirect()->route('sales.showAll')->with('success', 'Sale created successfully');
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
           return redirect()->route('sales.showAll')
                             ->with('error', 'Sale not found');
        }

        return view('sale.show', compact('sale'));
    }

    /**
     * Mostrar el formulario para editar una venta existente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sale = Sale::find($id);

        if (!$sale) {
            return redirect()->route('sales.showAll')
                             ->with('error', 'Sale not found');
        }

        $users = User::all();
        $paymentMethods = PaymentMethod::all();

        return view('sale.edit', compact('sale', 'users', 'paymentMethods'));
     }

    /**
     * Actualizar una venta existente en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSaleRequest $request, $id)
    {
        $validatedData = $request->validated();

        $sale = Sale::find($id);

        if (!$sale) {
            return redirect()->route('sales.showAll')
                             ->with('error', 'Sale not found');
        }

        $sale->update([
            'user_id' => $validatedData['user_id'] ?? $sale->user_id,
            'total' => $validatedData['total'] ?? $sale->total,
            'sale_date' => $validatedData['sale_date'] ?? $sale->sale_date,
            'payment_method_id' => $validatedData['payment_method_id'] ?? $sale->payment_method_id,
        ]);

        return redirect()->route('sales.show', $id)->with('success', 'Sale updated successfully');
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
            return redirect()->route('sales.showAll')
            ->with('error', 'Sale not found');
            }

            $sale->delete();

            return redirect()->route('sales.showAll')->with('success', 'Sale deleted successfully');
    }
}

