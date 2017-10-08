<?php

namespace App\Http\Controllers;

use App\Boutic;
use App\Like;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use function Sodium\add;

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
                Image::make($avatar)->resize(400, 400)->save( 'uploads/avatars/' . $filename );

                $user->img_path = $filename;
                $user->save();
            }

            $user->save();

            return redirect('/profile');

    }

    public function profile() {


        return view('profile', ['user' => Auth::user()]);
    }

    public function profileid($id)
    {
            $is_products = false;
            $user = User::find($id);
            if ($user->is_boutic == 1) {
                $catId = Session::get('catId');
                $boutic = Boutic::all()->where('user_id', '=', $id)->first();
                if ($catId == 0) {
                    $products = $boutic->products;
                } elseif ($catId == 1) {
                    $products = $boutic->products->where('cat_id', '=', $catId);
                } elseif ($catId == 2) {
                    $products = $boutic->products->where('cat_id', '=', $catId);
                } elseif ($catId == 3) {
                    $products = $boutic->products->where('cat_id', '=', $catId);
                }
                if (!$products->isEmpty()) {
                    $is_products = true;
                }
                return view('profileboutic', ['boutic' => $boutic, 'products' => $products, 'is_products' => $is_products]);
            } else {
                return view('profile', ['user' => $user]);
            }
        }

}
