<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit($id, Request $request)
    {

            $user = User::find($id);
            $user->phone_number = $request->phone_number;
            $user->save();
            return redirect('/home');


    }
}
