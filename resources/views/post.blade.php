@extends('partials.layout')
@section('title', $post->title)
@section('content')
@include('partials.post-card', ['full' => true])
<form method="POST" action="{{ route('comments.store', $post) }}" class="my-4">
    @csrf
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <textarea
        name="body"
        class="textarea textarea-bordered w-full"
        placeholder="Write a comment..."
        required></textarea>

    <button type="submit" class="btn btn-primary mt-2">
        Submit Comment
    </button>
</form>
@foreach ($post->comments as $comment)
<div class="card bg-base-300 shadow-sm my-2">
    <div class="card-body">
        <p>{{ $comment->body }}</p>
        <p class="text-base-content/50">{{ $comment->user->name }}</p>
    </div>
</div>
@endforeach
@endsection