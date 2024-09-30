{{-- resources/views/reviews/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Review</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="pack_id">Pack</label>
            <select id="pack_id" name="pack_id" class="form-control" required>
                @foreach ($packs as $pack)
                    <option value="{{ $pack->id }}">{{ $pack->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="user_id">User</label>
            <select id="user_id" name="user_id" class="form-control" required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="number" id="rating" name="rating" class="form-control" min="1" max="5" required>
        </div>
        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea id="comment" name="comment" class="form-control" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="review_date">Review Date</label>
            <input type="date" id="review_date" name="review_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Review</button>
    </form>
</div>
@endsection
