{{-- resources/views/packs/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Pack Details</h1>
    <p><strong>Name:</strong> {{ $pack->name }}</p>
    <p><strong>Description:</strong> {{ $pack->description }}</p>
    <p><strong>Price:</strong> {{ $pack->price }}</p>
    <p><strong>Discount:</strong> {{ $pack->discount }}</p>
    <a href="{{ route('packs.edit', $pack->id) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('packs.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
