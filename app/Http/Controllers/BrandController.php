<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    /**
     * Mostrar una lista de todas las marcas con paginación y filtrado.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Brand::query();

        // Filtrado
        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        // Paginación
        $brands = $query->paginate(10); // Paginación de 10 marcas por página

        return view('brand.showAll', compact('brands'));
    }

    /**
     * Mostrar el formulario para crear una nueva marca.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brand.create');
    }

    /**
     * Almacenar una nueva marca en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrandRequest $request)
    {
        $validatedData = $request->validated();

       $brand = Brand::create([
        'name' => $validatedData['name'],
        'description' => $validatedData['description'],
     ]);

        return redirect()->route('brands.showAll')->with('success', 'Brand created successfully');
    }

    /**
     * Mostrar los detalles de una marca específica.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return redirect()->route('brands.showAll')
                             ->with('error', 'Brand not found');
        }

        return view('brand.show', compact('brand'));
    }

    /**
     * Mostrar el formulario para editar una marca existente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return redirect()->route('brands.showAll')
                             ->with('error', 'Brand not found');
        }

        return view('brand.edit', compact('brand'));
    }

    /**
     * Actualizar una marca existente en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrandRequest $request, $id)
    {
        $validatedData = $request->validated();

        $brand = Brand::find($id);

        if (!$brand) {
            return redirect()->route('brands.showAll')
                             ->with('error', 'Brand not found');
        }

        $brand->update([
            'name' => $validatedData['name'] ?? $brand->name,
            'description' => $validatedData['description'] ?? $brand->description,
        ]);

        return redirect()->route('brands.show', $id)->with('success', 'Brand updated successfully');
    }

    /**
     * Eliminar una marca específica de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return redirect()->route('brands.showAll')
                             ->with('error', 'Brand not found');
        }

        $brand->delete();

        return redirect()->route('brands.showAll')->with('success', 'Brand deleted successfully');
    }
}

