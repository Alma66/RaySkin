{{-- resources/views/packs/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pack</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('packs.update', $pack->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $pack->name) }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" rows="3" required>{{ old('description', $pack->description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" id="price" name="price" class="form-control" step="0.01" value="{{ old('price', $pack->price) }}" required>
        </div>
        <div class="form-group">
            <label for="discount">Discount</label>
            <input type="number" id="discount" name="discount" class="form-control" step="0.01" value="{{ old('discount', $pack->discount) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Pack</button>
    </form>
</div>
@endsection
