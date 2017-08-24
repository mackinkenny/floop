<?php

namespace App\Http\Controllers;

use App\Center;
use Illuminate\Http\Request;
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
            Image::make($avatar)->resize(300, 300)->save(public_path('uploads/centers/' . $filename));

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
        $center = Center::find($id);
        return view('show.center', ['center' => $center]);
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
