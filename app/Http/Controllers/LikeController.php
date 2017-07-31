<?php

namespace App\Http\Controllers;


use App\Like;
use App\Product;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    //
public function index($id,$u_id)
{
        $like = new Like();
        $like->user_id = $u_id;
        $like->product_id = $id;

        $product = Product::find($id);
        $product->count_likes++;

        $product->save();
        $like->save();

        return back();
}
}
