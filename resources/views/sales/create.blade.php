{{-- resources/views/sales/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Sale</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('sales.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_id">User</label>
            <select id="user_id" name="user_id" class="form-control" required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input type="number" id="total" name="total" class="form-control" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="sale_date">Sale Date</label>
            <input type="date" id="sale_date" name="sale_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="payment_method_id">Payment Method</label>
            <select id="payment_method_id" name="payment_method_id" class="form-control" required>
                @foreach ($paymentMethods as $paymentMethod)
                    <option value="{{ $paymentMethod->id }}">{{ $paymentMethod->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create Sale</button>
    </form>
</div>
@endsection

