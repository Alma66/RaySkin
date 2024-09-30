{{-- resources/views/reviews/showAll.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Reviews</h1>
    <a href="{{ route('reviews.create') }}" class="btn btn-primary mb-3">Create New Review</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pack</th>
                <th>User</th>
                <th>Rating</th>
                <th>Comment</th>
                <th>Review Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)
                <tr>
                    <td>{{ $review->id }}</td>
                    <td>{{ $review->pack->name }}</td>
                    <td>{{ $review->user->name }}</td>
                    <td>{{ $review->rating }}</td>
                    <td>{{ $review->comment }}</td>
                    <td>{{ $review->review_date }}</td>
                    <td>
                        <a href="{{ route('reviews.show', $review->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" style="display:inline;">
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
