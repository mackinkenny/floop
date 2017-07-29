<?php

namespace App\Http\Controllers;

use App\Brand;

use Illuminate\Http\Request;
use App\Cat;

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
        return view('home');
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

}
