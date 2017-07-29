<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Cat;
use App\Product;
use App\Color;
use App\Size;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();

        return view('all.product', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $brands = Brand::all();
        $cats = Cat::all();
        $colors = Color::all();
        $sizes = Size::all();
        return view('create.product', ['brands' => $brands, 'cats' => $cats, 'colors' => $colors, 'sizes' => $sizes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product = new Product();
        $product->name = $request->name;
        $product->brand_id = $request->brand_id;
        $product->cat_id = $request->cat_id;
        $product->color_id = $request->color_id;
        $product->size_id = $request->size_id;
        if ($request->hasFile('img_path'))
        {

            $image = $request->file('img_path');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(200, 200)->save( public_path('uploads/images/products/' . $filename) );

            $product->img_path = $filename;
        }
        $product->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $productShow = Product::find($id);

        return $productShow;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $productEdit = Product::find($product->id);

        return view('edit.product',['product' => $productEdit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $productUp = Product::find($product->id);
        $productUp->name = $request->name;
        $productUp->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $productDel = Product::find($product->id);
        $productDel->delete();

        return back();
    }
}
