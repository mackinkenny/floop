<?php

namespace App\Http\Controllers;

use App\Like;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function edit($id, Request $request)
    {

            $user = User::find($id);


            if ($request->name)
                $user->name = $request->name;

            if ($request->email)
                $user->email = $request->email;

            if ($request->phone_number)
                $user->phone_number = $request->phone_number;


            
            if ($request->hasFile('img_path'))
            {

                $avatar = $request->file('img_path');
                $filename = time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300, 300)->save( public_path('uploads/avatars/' . $filename) );

                $user->img_path = $filename;
                $user->save();
            }

            $user->save();

            return redirect('/home');

    }

    public function profile()
        {
//            $products = DB::table('products')
//                ->crossJoin('likes', 'likes.product_id', '=', 'products.id')
//                ->where('likes.user_id' ,'=', Auth::user()->id)
//                ->get();

            $likes = Like::all();
            $products_2 = $likes->products_id;
        dd($products_2);
        return view('profile', ['user' => Auth::user(), 'products' => $products]);


    }

}
