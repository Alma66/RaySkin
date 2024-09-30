{{-- resources/views/admins/delete.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Delete Admin</h1>
    <form action="{{ route('admins.destroy', $admin->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <p>Are you sure you want to delete this admin?</p>
        <p><strong>Name:</strong> {{ $admin->name }}</p>
        <p><strong>Email:</strong> {{ $admin->email }}</p>
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="{{ route('admins.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
