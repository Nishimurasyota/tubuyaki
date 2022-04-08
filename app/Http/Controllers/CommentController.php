<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Tweet;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(Request $request)
    {

        $comment = new Comment;
        $form = $request->all();
        unset($form['_token']);
        $comment->fill($form)->save();
        $tweet = Tweet::find($comment->tweet->id);
        return redirect("tweet");
    }

    public function delete(Request $request)
    {
        $comment = Comment::find($request->id);
        $tweet = Tweet::find($comment->tweet->id);
        $comment->delete();
        return redirect("tweet");
    }
}
