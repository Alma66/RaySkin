{{-- resources/views/brands/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Brand Details</h1>
    <p><strong>Name:</strong> {{ $brand->name }}</p>
    <p><strong>Description:</strong> {{ $brand->description }}</p>
    <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('brands.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
