{{-- resources/views/payment_methods/delete.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Delete Payment Method</h1>
    <form action="{{ route('payment_methods.destroy', $paymentMethod->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <p>Are you sure you want to delete this payment method?</p>
        <p><strong>Name:</strong> {{ $paymentMethod->name }}</p>
        <p><strong>Description:</strong> {{ $paymentMethod->description }}</p>
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="{{ route('payment_methods.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
