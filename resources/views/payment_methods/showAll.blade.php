{{-- resources/views/payment_methods/showAll.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Payment Methods</h1>
    <a href="{{ route('payment_methods.create') }}" class="btn btn-primary mb-3">Create New Payment Method</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paymentMethods as $paymentMethod)
                <tr>
                    <td>{{ $paymentMethod->id }}</td>
                    <td>{{ $paymentMethod->name }}</td>
                    <td>{{ $paymentMethod->description }}</td>
                    <td>
                        <a href="{{ route('payment_methods.show', $paymentMethod->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('payment_methods.edit', $paymentMethod->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('payment_methods.destroy', $paymentMethod->id) }}" method="POST" style="display:inline;">
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
