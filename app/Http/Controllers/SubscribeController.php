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
    public function index($id,$u_id)
    {
        $boutic = Boutic::all()->where('user_id', '=', $id)->first();

        $user = User::find($u_id);
        $bouticDB = BouticUser::all()
            ->where('user_id', $u_id)
            ->where('boutic_id', $boutic->id)
            ->first();



        if ($bouticDB) {
            $user->boutics()->detach($boutic->id);
            $boutic->subs--;

            $notice = new Notice();
            $notice->user_id = $u_id;
            $notice->boutic_id = $boutic->id;
            $notice->text_id = 2;
            $notice->status = 1;

            $notice->save();
        }
        else {
            $user->boutics()->attach($boutic->id, ['status' => 1]);
            $boutic->subs++;
        }
        
        $boutic->save();
        return back();
    }

}
