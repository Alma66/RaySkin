{{-- resources/views/packs/delete.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Delete Pack</h1>
    <form action="{{ route('packs.destroy', $pack->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <p>Are you sure you want to delete this pack?</p>
        <p><strong>Name:</strong> {{ $pack->name }}</p>
        <p><strong>Description:</strong> {{ $pack->description }}</p>
        <p><strong>Price:</strong> {{ $pack->price }}</p>
        <p><strong>Discount:</strong> {{ $pack->discount }}</p>
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="{{ route('packs.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
