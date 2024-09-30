{{-- resources/views/reviews/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Review Details</h1>
    <p><strong>product:</strong> {{ $review->product->name }}</p>
    <p><strong>User:</strong> {{ $review->user->name }}</p>
    <p><strong>Rating:</strong> {{ $review->rating }}</p>
    <p><strong>Comment:</strong> {{ $review->comment }}</p>
    <p><strong>Review Date:</strong> {{ $review->review_date }}</p>
    <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
