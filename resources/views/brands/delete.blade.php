{{-- resources/views/brands/delete.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Delete Brand</h1>
    <form action="{{ route('brands.destroy', $brand->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <p>Are you sure you want to delete this brand?</p>
        <p><strong>Name:</strong> {{ $brand->name }}</p>
        <p><strong>Description:</strong> {{ $brand->description }}</p>
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="{{ route('brands.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
