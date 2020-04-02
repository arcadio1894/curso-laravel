<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index($film_id)
    {
        $comments = Comment::where('film_id', $film_id)->get();
        return $comments;
    }

    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->message = $request->get('message');
        $comment->film_id = $request->get('film_id');
        $comment->user_id = Auth::user()->id;
        $comment->user = Auth::user()->name;
        $comment->photo = $request->get('photo');
        $comment->save();

        return $comment;
        // devuelve el comentario creado

    }

    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);
        $comment->message = $request->get('message');
        $comment->save();

        return $comment;
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
    }
}
