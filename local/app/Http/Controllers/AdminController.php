<?php

namespace App\Http\Controllers;

use App\Boutic;
use App\Brand;
use App\Cat;
use App\Center;
use App\Discount;
use App\Product;
use App\Season;
use App\Seo;
use App\Size;
use App\Type;
use App\TypeSize;
use App\User;
use App\Color;
use App\Word;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

        return view('layouts.admin', ['boutics' => Boutic::all(),
            'brands' => Brand::all(),
            'cats' => Cat::all(),
            'centers' => Center::all(),
            'discounts' => Discount::all(),
            'products' => Product::all(),
            'seasons' => Season::all(),
            'seos' => Seo::all(),
            'sizes' => Size::all(),
            'types' => Type::all(),
            'typesizes' => TypeSize::all(),
            'users' => User::all(),
            'colors' => Color::all(),
            'words' => Word::all(),
        ]);
    }
}
