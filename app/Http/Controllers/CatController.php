<?php

namespace App\Http\Controllers;

use App\Boutic;
use App\Cat;
use App\Center;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $cats = Cat::all();
        return view( 'all.cat', ['cats' => $cats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create.cat');
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
        $cat = new Cat();
        $cat->name = $request->name;
        $cat->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function show(Cat $cat)
    {
        //
        $catShow = Cat::find($cat->id);
        return view('show.cat', ['cat' => $catShow]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function edit(Cat $cat)
    {
        //
        $catEdit = Cat::find($cat->id);

        return view('edit.cat', ['cat' => $catEdit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cat $cat)
    {
        //
        if($request)
        {
            $catUp = Cat::find($cat->id);
            $catUp->name = $request->name;
            $catUp->save();
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cat $cat)
    {
        //
        $catDel = Cat::find($cat->id);
        $catDel->delete();


    }

    public function sort($id) {
        Session::put('catId', $id);
        $centers = Center::all();
        $boutics = Boutic::all();

        if ($id == 1) {
            $centers = Center::where('if_male', '=', 1)->get();
            $boutics = Boutic::where('if_male', '=', 1)->get();
        }
        if ($id == 2) {
            $centers = Center::where('if_female', '=', 1)->get();
            $boutics = Boutic::where('if_female', '=', 1)->get();
        }
        if ($id == 3) {
            $centers = Center::where('if_child', '=', 1)->get();
            $boutics = Boutic::where('if_child', '=', 1)->get();
        }


        return response()->json(['Success' => Session::get('catId'), 'centers' => $centers, 'boutics' => $boutics, 'centcount' => $centers->count(), 'boutcount' => $boutics->count()]);
    }
}
