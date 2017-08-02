<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function index(Request $request,$id,$u_id)
    {
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user_id = $u_id;
        $comment->product_id = $id;

        $comment->save();

        return back();
    }
}
