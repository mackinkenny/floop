<?php

namespace App\Http\Controllers;

use App\Boutic;
use App\Center;
use App\Maintype;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $centers = Center::all();
        return response()->json(['Success' => $centers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create.center');
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
        $center = new Center();

        $center->name = $request->name;

        if ($request->hasFile('img_path')) {
            $avatar = $request->file('img_path');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(400, 400)->save('uploads/centers/' . $filename );

            $center->img_path = $filename;

        }
        $center->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $is_boutics = false;
        $catId = Session::get('catId');
//        $catId = 1;
        $center = Center::find($id);
        $maintypes = Maintype::all();
        $count = DB::table('maintypes')->count();
        $types = Type::all();
        $boutics = $center->boutics;
//        $boutics = $center->boutics->where('if_male', '=', 1);

//        if ($catId == 1) {
//            $boutics = Boutic::where('if_male', '=', 1)->get();
//        }
//        elseif ($catId == 2) {
//            $boutics = Boutic::where('if_female', '=', 1)->get();
//        }
//        elseif ($catId == 3) {
//            $boutics = Boutic::where('if_child', '=', 1)->get();
//        }
//        if (!$boutics->isEmpty()) {
//            $is_boutics = true;
//        }

//        if ($catId == 1) {
//            $boutics = Boutic::all()->where('if_male', '=', 1);
//        }
//        elseif ($catId == 2) {
//            $boutics = Boutic::all()->where('if_female', '=', 1);
//        }
//        elseif ($catId == 3) {
//            $boutics = Boutic::all()->where('if_child', '=', 1);
//        }
//        if (!$boutics->isEmpty()) {
//            $is_boutics = true;
//        }

        if ($catId == 1) {
            $boutics = $center->boutics->where('if_male', '=', 1);
        }
        elseif ($catId == 2) {
            $boutics = $center->boutics->where('if_female', '=', 1);
        }
        elseif ($catId == 3) {
            $boutics = $center->boutics->where('if_child', '=', 1);
        }
        if (!$boutics->isEmpty()) {
            $is_boutics = true;
        }


//        dd($boutics);
        return view('show.center', ['center' => $center, 'boutics' => $boutics, 'is_boutics' => $is_boutics, 'catId' => $catId, 'types' => $types,'maintypes' => $maintypes, 'count' => $count]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function edit(Center $center)
    {
        //
        $centerEdit = Center::find($center->id);
        return view('edit.center', ['center' => $centerEdit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Center $center)
    {
        //
        $centerUp = Center::find($center->id);
        $centerUp->name = $request->name;
        $centerUp->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function destroy(Center $center)
    {
        //
        $centerDel = Center::find($center->id);
        $centerDel->delete();

        return back();
    }


    public function showajax($id)
    {
        //
        $is_boutics = false;
        $catId = Session::get('catId');
//        $catId = 1;
        $center = Center::find($id);
        $types = Type::all();
        $boutics = $center->boutics;

        if ($catId == 1) {
            $boutics = Boutic::where('if_male', '=', 1)->get();
        }
        elseif ($catId == 2) {
            $boutics = Boutic::where('if_female', '=', 1)->get();
        }
        elseif ($catId == 3) {
            $boutics = Boutic::where('if_child', '=', 1)->get();
        }
        if (!$boutics->isEmpty()) {
            $is_boutics = true;
        }

//        if ($catId == 1) {
//            $boutics = Boutic::all()->where('if_male', '=', 1);
//        }
//        elseif ($catId == 2) {
//            $boutics = Boutic::all()->where('if_female', '=', 1);
//        }
//        elseif ($catId == 3) {
//            $boutics = Boutic::all()->where('if_child', '=', 1);
//        }
//        if (!$boutics->isEmpty()) {
//            $is_boutics = true;
//        }

//        dd($boutics);
        return response()->json(['center' => $center, 'boutics' => $boutics, 'is_boutics' => $is_boutics, 'catId' => $catId, 'types' => $types]);
    }


}
