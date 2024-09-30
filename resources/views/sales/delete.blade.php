{{-- resources/views/sales/delete.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Delete Sale</h1>
    <form action="{{ route('sales.destroy', $sale->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <p>Are you sure you want to delete this sale?</p>
        <p><strong>Total:</strong> {{ $sale->total }}</p>
        <p><strong>Sale Date:</strong> {{ $sale->sale_date }}</p>
        <p><strong>User:</strong> {{ $sale->user->name }}</p>
        <p><strong>Payment Method:</strong> {{ $sale->paymentMethod->name }}</p>
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="{{ route('sales.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
