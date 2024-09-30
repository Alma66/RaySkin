{{-- resources/views/packs/showAll.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Packs</h1>
    <a href="{{ route('packs.create') }}" class="btn btn-primary mb-3">Create New Pack</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($packs as $pack)
                <tr>
                    <td>{{ $pack->id }}</td>
                    <td>{{ $pack->name }}</td>
                    <td>{{ $pack->description }}</td>
                    <td>{{ $pack->price }}</td>
                    <td>{{ $pack->discount }}</td>
                    <td>
                        <a href="{{ route('packs.show', $pack->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('packs.edit', $pack->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('packs.destroy', $pack->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
