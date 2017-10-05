<?php

namespace App\Http\Controllers;

use App\Discount;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Symfony\Component\HttpKernel\Tests\Controller\controller_function;
use function Symfony\Component\HttpKernel\Tests\controller_func;

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

        foreach($request->products as $product) {
            $productjson = json_decode($product);
            $productjsonfinded = Product::find($productjson->id);
            $productjsonfinded->discount_id = $request->discount_id;
            $productjsonfinded->save();
        }

//
//        $product->discount_id = $request->discount_id;
//        $product->save();
//
//

    }

    public function discounts()
    {
        $products = Product::all()->where('discount_id', '=', 1);
        $is_products = false;
        if(!$products->isEmpty())
        {
            $is_products = true;
        }

        return view('show.discounts',['products' => $products,'is_products' => $is_products]);
    }
}
