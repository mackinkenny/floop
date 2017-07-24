<?php

namespace App\Http\Controllers;

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

    public function all() {
        $cats = Cat::all();
        return view('index2', ['cats' => $cats]);
    }

}
