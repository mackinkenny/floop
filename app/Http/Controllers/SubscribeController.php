<?php

namespace App\Http\Controllers;

use App\Boutic;
use App\User;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    //
    public function index($id,$u_id)
    {
        $boutic = Boutic::all()->where('user_id', '=', $id)->first();

        $user = User::find($u_id);
        $user->boutics()->attach($boutic->id);

        return back();
    }

}
