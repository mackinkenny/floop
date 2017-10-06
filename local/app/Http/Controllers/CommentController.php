<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Notice;
use App\User;
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

        $notice = new Notice();
        $notice->user_id = $u_id;
        $notice->product_id = $id;
        $notice->comment_id = $comment->id;
        $notice->boutic_id = $comment->product->boutic_id;
        $notice->text_id = 3;
        $notice->status = 1;

        $notice->save();

        $user = User::find($u_id);
        $username = $user->name;
        return response()->json(['user_name' => $username]);
    }
}
