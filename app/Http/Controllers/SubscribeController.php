<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    //
    public function index($id,$u_id)
    {
        $user = User::find($u_id);
        $user->boutics()->attach($id);

        return back();
    }

}
