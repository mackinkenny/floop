<?php

namespace App\Http\Controllers;

use App\Boutic;
use App\Center;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class BouticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $boutics = Boutic::all();
        $user = Auth::user();
        return response()->json(['Success' => $boutics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::all();
        $centers = Center::all();
        return view('create.boutic',['users' => $users, 'centers' => $centers]);
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
        $user = User::find($request->user_id);

        $boutic = new Boutic();

        $boutic->name = $request->name;
        $boutic->user_id = $request->user_id;
        $boutic->center_id = $request->center_id;
        $boutic->img_path = $user->img_path;
        $boutic->save();


        $user->is_boutic = 1;
        $user->save();


        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Boutic  $boutic
     * @return \Illuminate\Http\Response
     */
    public function show(Boutic $boutic)
    {
        //
        $bouticShow = Boutic::findOrFail($boutic->id);
        return view('show.boutic', ['boutic' => $bouticShow]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boutic  $boutic
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boutic  $boutic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boutic $boutic)
    {
        //
        if ($request) {
            $bouticUp = Boutic::find($boutic->id);
            $bouticUp->name = $request->name;
            $bouticUp->save();
        }

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boutic  $boutic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boutic $boutic)
    {
        //
        $bouticDel = Boutic::find($boutic->id);
        $bouticDel->delete();

        return back();
    }

    public function sort(Request $request, $id) {

        $center = Center::find($id);


        if($request->types) {


            $bouticcols = [];
            $types = $request->types;
            $catId = Session::get('catId');

            $boutics = Boutic::all()->where('center_id','=', $id);
            if ($catId == 1) {
                $boutics = $center->boutics->where('if_male', '=', 1);
            }
            elseif ($catId == 2) {
                $boutics = $center->boutics->where('if_female', '=', 1);
            }
            elseif ($catId == 3) {
                $boutics = $center->boutics->where('if_child', '=', 1);
            }

            foreach ($types as $type) {
                foreach ($boutics as $boutic){


                    foreach($boutic->products as $product)
                    {

                        if($product->type_id == $type)
                        {

                            $bouticcols[] = $boutic;

                            break;
                        }
                    }
                }
            }
            $bouticcolected = collect($bouticcols);
            $bouticcolected = $bouticcolected->unique();


            return response()->json(['boutics' => $bouticcolected, 'center' => $center]);


        }
        else {
            $allboutics = Boutic::where('center_id', '=', $id)->get();

            return response()->json(['boutics' => $allboutics,  'center' => $center]);
        }
        return response()->json(['slider' => view('slider')]);




//        return response()->json(['success' => 'success']);
    }

    public function edit($id, Request $request)
    {
        $boutic = Boutic::all()->where('user_id', '=', $id)->first();
        $user = User::all()->where('id','=',$id)->first;

        if ($request->name)
            $boutic->name = $request->name;

        if ($request->info)
            $boutic->info = $request->info;

        if ($request->phone_number)
            $boutic->phone_number = $request->phone_number;

        if ($request->delivery)
            $boutic->delivery = $request->delivery;
        if ($request->hasFile('img_path'))
        {

            $avatar = $request->file('img_path');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(400, 400)->save( 'uploads/boutic/avatars/' . $filename );

            $boutic->img_path = $filename;
            $boutic->save();
        }

        $boutic->save();

        return back();

    }
}
