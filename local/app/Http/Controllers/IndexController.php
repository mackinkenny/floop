<?php

namespace App\Http\Controllers;

use App\Boutic;
use App\Cat;
use App\Center;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    //
    public function index()
    {
        $types = Type::all();
        $centers = Center::all();
        $boutics = Boutic::all();
        $cats = Cat::all();
        Session::put('catId', 0);

        return view('home',['boutics' => $boutics, 'centers' => $centers,'types' => $types, 'cats' => $cats]);

    }
}
