<?php

namespace App\Http\Controllers;

use App\Boutic;
use App\Brand;
use App\Cat;
use App\Center;
use App\Photo;
use App\Product;
use App\Color;
use App\Season;
use App\Size;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $product->save();
            foreach ($request->img_paths as $index => $photo) {
                $filename = time() + random_int(random_int(-10000, 0), random_int(1000, 999999)) . '.' . $photo->getClientOriginalExtension();
                Image::make($photo)->resize(600, 600)->save( public_path('uploads/images/products/' . $filename) );
                $photonew = new Photo();
                $photonew->img_path = $filename;
                $photonew->product_id = $product->id;
                $photonew->save();
                if ($index == 0) {
                    $product->img_path = $filename;
                    $product->save();
                }
            }
        $boutic = Boutic::find($request->boutic_id);
        if ($request->cat_id == 1) {
            $boutic->if_male = 1;
        }
        if ($request->cat_id == 2) {
            $boutic->if_female = 1;
        }
        if ($request->cat_id == 3) {
            $boutic->if_child = 1;
        }

        $boutic->save();
        $center = Center::find($boutic->center->id);
        if ($request->cat_id == 1) {
            $center->if_male = 1;
        }
        if ($request->cat_id == 2) {
            $center->if_female = 1;
        }
        if ($request->cat_id == 3) {
            $center->if_child = 1;
        }
        $center->save();
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
        $product = Product::find($id);
        $boutic = Boutic::find($product->boutic_id);
        $size = $product->size->name;
        $brand = $product->brand->name;
        $color = $product->color->name;
        $user = Auth::user()->id;
        $photos = $product->photos;

        return response()->json([
            'product' => $product,
            'boutic' => $boutic,
            'size' => $size,
            'color' => $color,
            'brand' => $brand,
            'user' => $user,
            'photos' => $photos,
        ]);
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
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        $catId = $product->cat_id;
        $boutic = Boutic::find($product->boutic_id);
        $product->delete();

        $center = Center::find($boutic->center_id);
        if ($catId == 1) {
            if (!$boutic->products->where('cat_id', '=', 1)->first()) {
                $boutic->if_male = 0;
                $boutic->save();
            }
            if (!$center->products->where('cat_id', '=', 1)->first()) {
                $center->if_male = 0;
                $center->save();
            }
        }
        if ($catId == 2) {
            if (!$boutic->products->where('cat_id', '=', 2)->first()) {
                $boutic->if_female = 0;
                $boutic->save();
            }
            if (!$center->products->where('cat_id', '=', 2)->first()) {
                $center->if_female = 0;
                $center->save();
            }
        }
        if ($catId == 3) {
            if (!$boutic->products->where('cat_id', '=', 3)->first()) {
                $boutic->if_child = 0;
                $boutic->save();
            }
            if (!$center->products->where('cat_id', '=', 3)->first()) {
                $center->if_child = 0;
                $center->save();
            }
        }

        return redirect('/');
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

    public function sort($id)
    {
        $products = Product::all();
        $products = $products->where('type_id', '=', $id);

        return view('show.sort',['products' => $products]);
    }

}
