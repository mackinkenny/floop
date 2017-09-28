<?php

namespace App\Http\Controllers;

use App\Center;
use App\Type;
use Illuminate\Http\Request;
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
        $center = Center::find($id);
        $types = Type::all();
        $boutics = $center->boutics;

        if ($catId == 1) {
            $boutics = $boutics->where('if_male', '=', 1);
        }
        elseif ($catId == 2) {
            $boutics = $boutics->where('if_female', '=', 1);
        }
        elseif ($catId == 3) {
            $boutics = $boutics->where('if_child', '=', 1);
        }
        if (!$boutics->isEmpty()) {
            $is_boutics = true;
        }
        return view('show.center', ['center' => $center, 'boutics' => $boutics, 'is_boutics' => $is_boutics, 'catId' => $catId, 'types' => $types]);
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
}
