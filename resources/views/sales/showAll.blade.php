{{-- resources/views/sales/showAll.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Sales</h1>
    <a href="{{ route('sales.create') }}" class="btn btn-primary mb-3">Create New Sale</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Total</th>
                <th>Sale Date</th>
                <th>User</th>
                <th>Payment Method</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
                <tr>
                    <td>{{ $sale->id }}</td>
                    <td>{{ $sale->total }}</td>
                    <td>{{ $sale->sale_date }}</td>
                    <td>{{ $sale->user->name }}</td>
                    <td>{{ $sale->paymentMethod->name }}</td>
                    <td>
                        <a href="{{ route('sales.show', $sale->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" style="display:inline;">
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
