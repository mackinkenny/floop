<?php

namespace App\Http\Controllers;

use App\Boutic;
use App\Brand;
use App\Cat;
use App\Product;
use App\Color;
use App\Season;
use App\Size;
use App\Type;
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
        $boutics = Boutic::all();
        $types = Type::all();
        $seasons = Season::all();
        return view('create.product', ['brands' => $brands, 'cats' => $cats, 'colors' => $colors, 'sizes' => $sizes, 'boutics' => $boutics,'types' => $types, 'seasons' => $seasons]);
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
        $product->boutic_id = $request->boutic_id;
        $product->type_id = $request->type_id;
        $product->season_id = $request->season_id;
        $product->price = $request->price;
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

        return view ('show.product', ['product' => $productShow]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::find($id);

        return view('edit.product',['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $productUp = Product::find($request->id);
        $productUp->discount_id = $request->discount_id;

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
    public function reset(Request $request)
    {
         $product = Product::find($request->id);
         if($product->discount_id == null)
         {
         }
         else
         {
             $product->discount_id = null;
         }
         $product->save();
         return back();
    }
    public function bouticshow(Request $request)
    {
        $boutic = Boutic::find($request->id);
        $products = app('App\Http\Controllers\FilterController')->index($request);
        $cats = Cat::all();
        $brands = Brand::all();
        $types = Type::all();
        $seasons = Season::all();



        return view('show.edit',['boutic' => $boutic,'cats' => $cats, 'brands' => $brands, 'products' => $products, 'types' => $types, 'seasons' => $seasons]);
    }

}
