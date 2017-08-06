<?php

namespace App\Http\Controllers;

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
        $user->products()->attach($id);

        $product = Product::find($id);
        $product->count_buys++;

        $product->save();


        return back();
    }
}
