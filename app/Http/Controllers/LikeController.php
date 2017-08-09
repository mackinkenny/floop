<?php

namespace App\Http\Controllers;


use App\Like;
use App\Notice;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Matcher\Not;

class LikeController extends Controller
{
    //
public function index($id,$u_id)
{
        $user = User::find($u_id);


        $product = Product::find($id);



        $productDB = DB::table('product_user')
            ->where('user_id', '=', $u_id)
            ->where('product_id', '=', $id)
            ->where('likeOrBuy', '=', 0)
            ->first();

        if ($productDB) {
            $user->products()->detach($id);
            $user->count_likes--;
            $product->count_likes--;
        }
        else {
            $user->products()->attach($id, ['likeOrBuy' => 0, 'status' => 1]);
            $user->count_likes++;
            $product->count_likes++;

            $notice = new Notice();
            $notice->user_id = $u_id;
            $notice->product_id = $id;
            $notice->boutic_id = $product->boutic_id;
            $notice->text_id = 0;
            $notice->status = 1;

            $notice->save();
        }



        $user->save();
        $product->save();


        return back();
}
}
