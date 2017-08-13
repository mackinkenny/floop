<?php

namespace App\Http\Controllers;

use App\Notice;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyController extends Controller
{
    //
    public function index(Request $request)
    {
        $user = User::find($request->u_id);
        $product = Product::find($request->id);

        $productDB = DB::table('product_user')
            ->where('user_id', '=', $request->u_id)
            ->where('product_id', '=', $request->id)
            ->where('likeOrBuy', '=', 1)
            ->first();

        if ($productDB) {
            $user->products()->detach($request->id);
            $user->count_buys--;
            $product->count_buys--;
        }
        else {
            $user->products()->attach($request->id, ['likeOrBuy' => 1, 'status' => 1]);
            $user->count_buys++;
            $product->count_buys++;

            $notice = new Notice();
            $notice->user_id = $request->u_id;
            $notice->product_id = $request->id;
            $notice->boutic_id = $product->boutic_id;
            $notice->text_id = 1;
            $notice->status = 1;

            $notice->save();

        }
        $user->save();

        $product->save();


        return response()->json(['Success' => 'Success']);
    }
}
