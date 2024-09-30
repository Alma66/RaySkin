{{-- resources/views/admins/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Details</h1>
    <p><strong>Name:</strong> {{ $admin->name }}</p>
    <p><strong>Email:</strong> {{ $admin->email }}</p>
    <a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('admins.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
