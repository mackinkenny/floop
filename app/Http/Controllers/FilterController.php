<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    //
    public function index(Request $request) {

        $products = Product::all();

        if ($request->cat_id) {
            $products = $products->where('cat_id', '=', $request->cat_id);
        }


        if ($request->brand_id) {
            $products = $products->where('brand_id', '=', $request->brand_id);
        }



        return $products;
    }
}
