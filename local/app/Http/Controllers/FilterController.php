<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    //
    public function index(Request $request) {

        $products = Product::all()->where('boutic_id', '=', $request->id);

        if ($request->cat_id) {
            $products = $products->where('cat_id', '=', $request->cat_id);
        }


        if ($request->brand_id) {
            $products = $products->where('brand_id', '=', $request->brand_id);
        }

        if ($request->type_id) {
            $products = $products->where('type_id', '=', $request->type_id);
        }

        if ($request->season_id) {
            $products = $products->where('season_id', '=', $request->season_id);
        }



        return $products;
    }
}
