{{-- resources/views/products/delete.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Delete Product</h1>
    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <p>Are you sure you want to delete this product?</p>
        <p><strong>Name:</strong> {{ $product->name }}</p>
        <p><strong>Description:</strong> {{ $product->description }}</p>
        <p><strong>Price:</strong> {{ $product->price }}</p>
        <p><strong>Stock:</strong> {{ $product->stock }}</p>
        <p><strong>Brand:</strong> {{ $product->brand->name }}</p>
        <p><strong>Category:</strong> {{ $product->category->name }}</p>
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
