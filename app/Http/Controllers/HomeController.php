<?php

namespace App\Http\Controllers;

use App\Boutic;
use App\Brand;

use App\Center;
use App\Comment;
use App\Notice;
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
    public function index()
    {
            $centers =Center::all();
            $boutics = Boutic::all();

            return view('home',['boutics' => $boutics, 'centers' => $centers]);

    }
    public function settings()
    {
        return view('auth.settings');
    }

    public function all(Request $request) {
        $products = app('App\Http\Controllers\FilterController')->index($request);
        $cats = Cat::all();
        $brands = Brand::all();


        return view('index2', ['cats' => $cats, 'brands' => $brands, 'products' => $products ]);
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




}
