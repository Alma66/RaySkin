<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Mostrar una lista de todas las categorías con paginación y filtrado.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Category::query();

        // Filtrado
        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        // Paginación
        $categories = $query->paginate(10); // Paginación de 10 categorías por página

        return view('category.showAll', compact('categories'));
    }

    /**
     * Mostrar el formulario para crear una nueva categoría.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Almacenar una nueva categoría en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $validatedData = $request->validated();



        $category = Category::create([
           'name' => $validatedData['name'],
            'description' => $validatedData['description'],
        ]);

        return redirect()->route('categories.showAll')->with('success', 'Category created successfully');
    }

    /**
     * Mostrar los detalles de una categoría específica.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->route('categories.showAll')
                             ->with('error', 'Category not found');
        }

        return view('category.show', compact('category'));
    }

    /**
     * Mostrar el formulario para editar una categoría existente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->route('categories.showAll')
                             ->with('error', 'Category not found');
        }

        return view('category.edit', compact('category'));
    }

    /**
     * Actualizar una categoría existente en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        $validatedData = $request->validated();

        $category = Category::find($id);

        if (!$category) {
            return redirect()->route('categories.showAll')
                             ->with('error', 'Category not found');
        }

        $category->update([
            'name' => $validatedData['name'] ?? $category->name,
            'description' => $validatedData['description'] ?? $category->description,
        ]);

        return redirect()->route('categories.show', $id)->with('success', 'Category updated successfully');
    }

    /**
     * Eliminar una categoría específica de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->route('categories.showAll')
                             ->with('error', 'Category not found');
        }

        $category->delete();

        return redirect()->route('categories.showAll')->with('success', 'Category deleted successfully');
    }
}


