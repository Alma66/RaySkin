<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PackController extends Controller
{
    /**
     * Mostrar una lista de todos los paquetes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packs = Pack::all();
        return response()->json($packs);
    }

    /**
     * Mostrar el formulario para crear un nuevo paquete.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Puedes retornar una vista con un formulario de creación si es necesario.
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
            return response()->json($validator->errors(), 422);
        }

        $pack = Pack::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'discount' => $request->discount,
        ]);

        return response()->json($pack, 201);
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
            return response()->json(['message' => 'Pack not found'], 404);
        }

        return response()->json($pack);
    }

    /**
     * Mostrar el formulario para editar un paquete existente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Puedes retornar una vista con un formulario de edición si es necesario.
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
            return response()->json($validator->errors(), 422);
        }

        $pack = Pack::find($id);

        if (!$pack) {
            return response()->json(['message' => 'Pack not found'], 404);
        }

        $pack->update([
            'name' => $request->name ?? $pack->name,
            'description' => $request->description ?? $pack->description,
            'price' => $request->price ?? $pack->price,
            'discount' => $request->discount ?? $pack->discount,
        ]);

        return response()->json($pack);
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
            return response()->json(['message' => 'Pack not found'], 404);
        }

        $pack->delete();

        return response()->json(['message' => 'Pack deleted successfully']);
    }
}

