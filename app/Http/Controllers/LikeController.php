<?php

namespace App\Http\Controllers;


use App\Like;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    //
public function index($id,$u_id)
{
        $user = User::find($u_id);
        $user->products()->attach($id);
        $product = Product::find($id);
        $product->count_likes++;

        $product->save();


        return back();
}
}
