<?php

namespace App\Http\Controllers;

use App\Boutic;
use App\BouticUser;
use App\Notice;
use App\User;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    //
    public function index(Request $request)
    {
        $boutic = Boutic::all()->where('user_id', '=', $request->b_id)->first();

        $user = User::find($request->u_id);
        $bouticDB = BouticUser::all()
            ->where('user_id', '=', $request->u_id)
            ->where('boutic_id', '=', $boutic->id)
            ->first();



        if ($bouticDB) {
            $user->boutics()->detach($boutic->id);
            $boutic->subs--;
        }
        else {
            $user->boutics()->attach($boutic->id, ['status' => 1]);
            $boutic->subs++;

            $notice = new Notice();
            $notice->user_id = $request->u_id;
            $notice->boutic_id = $boutic->id;
            $notice->text_id = 2;
            $notice->status = 1;

            $notice->save();
        }
        
        $boutic->save();
        return response()->json(['Success' => 'Hello']);
    }

    public function count(Request $request)
    {
        $boutic = Boutic::all()->where('id','=', $request->id)->first();

        return view('show/subscribe',['boutic' => $boutic]);
    }

}
