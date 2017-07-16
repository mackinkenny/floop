<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Intervention\Image\Image;

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
                Image::make($avatar)->resize(300,300)->save( public_path('/uploads/avatars/' . $filename));

                $user->img_path = $filename;
            }

            $user->save();

            return redirect('/home');

    }

    public function profile()
    {
        return view('profile', array('user' => Auth::user()) );


    }

}
