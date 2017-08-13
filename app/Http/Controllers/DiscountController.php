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
}
