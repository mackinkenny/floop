<?php

namespace App\Http\Controllers;

use App\Boutic;
use App\Center;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        $centers = Center::all();
        $boutics = Boutic::all();

        return view('home',['boutics' => $boutics, 'centers' => $centers]);

    }
}
