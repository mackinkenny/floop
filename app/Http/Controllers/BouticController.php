<?php

namespace App\Http\Controllers;

use App\Boutic;
use Illuminate\Http\Request;

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
        return view('all.boutics', ['boutics' => $boutics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create.boutic');
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
        $boutic = new Boutic();
        $boutic->name = $request->name;
        $boutic->save();

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
    public function edit(Boutic $boutic)
    {
        //
        $bouticEdit = Boutic::findOrFail($boutic->id);
        return view('edit.boutic', ['boutic' => $bouticEdit]);
    }

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
}
