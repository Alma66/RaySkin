{{-- resources/views/users/delete.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Delete User</h1>
    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <p>Are you sure you want to delete this user?</p>
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
