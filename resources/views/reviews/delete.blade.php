{{-- resources/views/reviews/delete.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Delete Review</h1>
    <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <p>Are you sure you want to delete this review?</p>
        <p><strong>Producto::</strong> {{ $review->product->name }}</p>
        <p><strong>User:</strong> {{ $review->user->name }}</p>
        <p><strong>Rating:</strong> {{ $review->rating }}</p>
        <p><strong>Comment:</strong> {{ $review->comment }}</p>
        <p><strong>Review Date:</strong> {{ $review->review_date }}</p>
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
