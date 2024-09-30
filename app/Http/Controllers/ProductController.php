<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Mostrar una lista de todos los productos con paginación y filtrado.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Product::query()->with(['brand', 'category']);

        // Filtrado
        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        if ($request->has('brand_id')) {
            $query->where('brand_id', $request->input('brand_id'));
        }

        if ($request->has('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }

        // Paginación
        $products = $query->paginate(10); // Paginación de 10 productos por página

        // Obtener listas para filtros
        $brands = Brand::all();
        $categories = Category::all();

        return view('product.showAll', compact('products', 'brands', 'categories'));
    }

    /**
     * Mostrar el formulario para crear un nuevo producto.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('product.create', compact('brands', 'categories'));
    }

    /**
     * Almacenar un nuevo producto en la base de datos.
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
            'stock' => 'required|integer|min:0',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($validator->fails()) {
            return redirect()->route('products.create')
                             ->withErrors($validator)
                             ->withInput();
        }

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('products.showAll')->with('success', 'Product created successfully');
    }

    /**
     * Mostrar los detalles de un producto específico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with(['brand', 'category'])->find($id);

        if (!$product) {
            return redirect()->route('products.showAll')
                             ->with('error', 'Product not found');
        }

        return view('product.show', compact('product'));
    }

    /**
     * Mostrar el formulario para editar un producto existente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('products.showAll')
                             ->with('error', 'Product not found');
        }

        $brands = Brand::all();
        $categories = Category::all();

        return view('product.edit', compact('product', 'brands', 'categories'));
    }

    /**
     * Actualizar un producto existente en la base de datos.
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
            'stock' => 'sometimes|required|integer|min:0',
            'brand_id' => 'sometimes|required|exists:brands,id',
            'category_id' => 'sometimes|required|exists:categories,id',
        ]);

        if ($validator->fails()) {
            return redirect()->route('products.edit', $id)
                             ->withErrors($validator)
                             ->withInput();
        }

        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('products.showAll')
                             ->with('error', 'Product not found');
        }

        $product->update([
            'name' => $request->name ?? $product->name,
            'description' => $request->description ?? $product->description,
            'price' => $request->price ?? $product->price,
            'stock' => $request->stock ?? $product->stock,
            'brand_id' => $request->brand_id ?? $product->brand_id,
            'category_id' => $request->category_id ?? $product->category_id,
        ]);

        return redirect()->route('products.show', $id)->with('success', 'Product updated successfully');
    }

    /**
     * Eliminar un producto específico de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('products.showAll')
                             ->with('error', 'Product not found');
        }

        $product->delete();

        return redirect()->route('products.showAll')->with('success', 'Product deleted successfully');
    }
}
