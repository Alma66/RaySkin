{{-- resources/views/sales/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Sale</h1>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('sales.update', $sale->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="user_id">User</label>
            <select id="user_id" name="user_id" class="form-control" required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $user->id == $sale->user_id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input type="number" id="total" name="total" class="form-control" step="0.01" value="{{ old('total', $sale->total) }}" required>
        </div>
        <div class="form-group">
            <label for="sale_date">Sale Date</label>
            <input type="date" id="sale_date" name="sale_date" class="form-control" value="{{ old('sale_date', $sale->sale_date->format('Y-m-d')) }}" required>
        </div>
        <div class="form-group">
            <label for="payment_method_id">Payment Method</label>
            <select id="payment_method_id" name="payment_method_id" class="form-control" required>
                @foreach ($paymentMethods as $paymentMethod)
                    <option value="{{ $paymentMethod->id }}" {{ $paymentMethod->id == $sale->payment_method_id ? 'selected' : '' }}>
                        {{ $paymentMethod->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Sale</button>
    </form>
</div>
@endsection
