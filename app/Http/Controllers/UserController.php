<?php

namespace App\Http\Controllers;

use App\Boutic;
use App\Like;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
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
                Image::make($avatar)->resize(300, 300)->save( public_path('uploads/avatars/' . $filename) );

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
        $user = User::find($id);
        if($user->is_boutic == 1)
        {
            $boutic = Boutic::all()->where('user_id', '=', $id)->first();
            return view('profileboutic', ['boutic' => $boutic]);
        }
        else {
            return view('profile', ['user' => $user]);
        }
    }

}
