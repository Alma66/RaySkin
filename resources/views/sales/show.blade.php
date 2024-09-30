{{-- resources/views/sales/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Sale Details</h1>
    <p><strong>Total:</strong> {{ $sale->total }}</p>
    <p><strong>Sale Date:</strong> {{ $sale->sale_date }}</p>
    <p><strong>User:</strong> {{ $sale->user->name }}</p>
    <p><strong>Payment Method:</strong> {{ $sale->paymentMethod->name }}</p>
    <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('sales.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
