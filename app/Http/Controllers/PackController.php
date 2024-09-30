<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PackController extends Controller
{
    /**
     * Mostrar una lista de todos los paquetes con paginación y filtrado.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Pack::query();

        // Filtrado
        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        // Paginación
        $packs = $query->paginate(10); // Paginación de 10 paquetes por página

        return view('pack.showAll', compact('packs'));
    }

    /**
     * Mostrar el formulario para crear un nuevo paquete.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pack.create');
    }

    /**
     * Almacenar un nuevo paquete en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'price' => 'required|numeric|min:0',
            'discount' => 'nullable|numeric|min:0|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->route('packs.create')
                             ->withErrors($validator)
                             ->withInput();
        }

        Pack::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'discount' => $request->discount,
        ]);

        return redirect()->route('packs.showAll')->with('success', 'Pack created successfully');
    }

    /**
     * Mostrar los detalles de un paquete específico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pack = Pack::find($id);

        if (!$pack) {
            return redirect()->route('packs.showAll')
                             ->with('error', 'Pack not found');
        }

        return view('pack.show', compact('pack'));
    }

    /**
     * Mostrar el formulario para editar un paquete existente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pack = Pack::find($id);

        if (!$pack) {
            return redirect()->route('packs.showAll')
                             ->with('error', 'Pack not found');
        }

        return view('pack.edit', compact('pack'));
    }

    /**
     * Actualizar un paquete existente en la base de datos.
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
            'price' => 'sometimes|required|numeric|min:0',
            'discount' => 'sometimes|nullable|numeric|min:0|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->route('packs.edit', $id)
                             ->withErrors($validator)
                             ->withInput();
        }

        $pack = Pack::find($id);

        if (!$pack) {
            return redirect()->route('packs.showAll')
                             ->with('error', 'Pack not found');
        }

        $pack->update([
            'name' => $request->name ?? $pack->name,
            'description' => $request->description ?? $pack->description,
            'price' => $request->price ?? $pack->price,
            'discount' => $request->discount ?? $pack->discount,
        ]);

        return redirect()->route('packs.show', $id)->with('success', 'Pack updated successfully');
    }

    /**
     * Eliminar un paquete específico de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pack = Pack::find($id);

        if (!$pack) {
            return redirect()->route('packs.showAll')
                             ->with('error', 'Pack not found');
        }

        $pack->delete();

        return redirect()->route('packs.showAll')->with('success', 'Pack deleted successfully');
    }
}

