<?php

namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use App\Events\onComment;
class CommentController extends Controller
{
    public function store(Request $request, $user_id, $article_id)
    {
       $comment = new Comment();
       $comment->comment = $request->get('comment');
       $comment->user_id = $user_id;
       $comment->article_id = $article_id;
       Event::fire(new onComment($comment));
       return redirect()->back();
    }
}
