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
    public function store(StorePackRequest $request)
    {
        $validatedData = $request->validated();

        Pack::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'discount' => $validatedData['discount'],
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
    public function update(UpdatePackRequest $request, $id)
    {
        $validatedData = $request->validated();

        $pack = Pack::find($id);

        if (!$pack) {
            return redirect()->route('packs.showAll')
                             ->with('error', 'Pack not found');
        }

        $pack->update([
           'name' => $validatedData['name'] ?? $pack->name,
            'description' => $validatedData['description'] ?? $pack->description,
            'price' => $validatedData['price'] ?? $pack->price,
            'discount' => $validatedData['discount'] ?? $pack->discount,
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

