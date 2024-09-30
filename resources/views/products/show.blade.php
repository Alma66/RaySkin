{{-- resources/views/products/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Product Details</h1>
    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Description:</strong> {{ $product->description }}</p>
    <p><strong>Price:</strong> {{ $product->price }}</p>
    <p><strong>Stock:</strong> {{ $product->stock }}</p>
    <p><strong>Brand:</strong> {{ $product->brand->name }}</p>
    <p><strong>Category:</strong> {{ $product->category->name }}</p>
    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
