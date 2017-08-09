<?php

namespace App\Http\Controllers;

use App\Notice;
use App\Product;
use App\ProductUser;
use App\User;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    //
    public function index($id,$u_id)
    {
        $user = User::find($u_id);
        $user->count_buys++;
        $user->products()->attach($id, ['likeOrBuy' => 1, 'status' => 1]);

        $product = Product::find($id);
        $product->count_buys++;

        $notice = new Notice();
        $notice->user_id = $u_id;
        $notice->product_id = $id;
        $notice->boutic_id = $product->boutic_id;
        $notice->text_id = 1;
        $notice->status = 1;

        $notice->save();

        $product->save();


        return back();
    }
}
