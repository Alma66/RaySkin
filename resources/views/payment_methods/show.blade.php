{{-- resources/views/payment_methods/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Payment Method Details</h1>
    <p><strong>Name:</strong> {{ $paymentMethod->name }}</p>
    <p><strong>Description:</strong> {{ $paymentMethod->description }}</p>
    <a href="{{ route('payment_methods.edit', $paymentMethod->id) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('payment_methods.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
