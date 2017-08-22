<?php

namespace App\Http\Controllers;

use App\Discount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscountController extends Controller
{
    //
    public function create() {
        return view('create.discount');
    }

    public function store(Request $request) {

        $discount = new Discount();

        $discount->percent = $request->percent;
        $discount->boutic_id = $request->boutic_id;

        $discount->save();

        return back();
    }

    public function edit(Request $request)
    {
        $data = json_decode($request->products);
        dd($data);
        foreach($request->products as $product) {

        }


        $product->discount_id = $request->discount_id;
        $product->save();


        return back();
    }
}
