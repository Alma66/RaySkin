{{-- resources/views/packs/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Pack</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('packs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" id="price" name="price" class="form-control" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="discount">Discount</label>
            <input type="number" id="discount" name="discount" class="form-control" step="0.01" value="0">
        </div>
        <button type="submit" class="btn btn-primary">Create Pack</button>
    </form>
</div>
@endsection
