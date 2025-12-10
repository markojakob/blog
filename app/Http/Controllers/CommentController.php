<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request, Post $post)
{
    $validated = $request->validated();
    $post->comments()->create([
        'user_id' => Auth::id(),
        'body' => $validated['body'],
    ]);
    return back();
}
}
