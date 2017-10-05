<?php

namespace App\Http\Controllers;

use App\Boutic;
use App\Brand;

use App\Center;
use App\Comment;
use App\Notice;
use App\Season;
use App\Type;
use App\User;
use Illuminate\Http\Request;
use App\Cat;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function settings()
    {
        return view('auth.settings');
    }

    public function showedit(Request $request) {
        $products = app('App\Http\Controllers\FilterController')->index($request);
        $cats = Cat::all();
        $brands = Brand::all();
        $seasons = Season::all();
        $types = Type::all();


        return view('show.edit', ['cats' => $cats, 'brands' => $brands, 'products' => $products,'seasons' => $seasons, 'types' => $types ]);
    }

    public function notice()
    {
        //$notices = Notice::all();
        if (Auth::user()->is_boutic) {
            $boutic = Auth::user()->boutic;
            $notices = $boutic->notices->sortByDesc('id');
        }
        else {
            $notices = Notice::all();
        }


        return view('all.notice', ['notices' => $notices]);
    }

    public function bsettings()
    {
        return view('auth.bsettings');
    }

}
