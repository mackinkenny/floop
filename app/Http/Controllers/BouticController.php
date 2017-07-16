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
        return view('boutics', ['boutics' => $boutics]);
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
        $boutic_show = Boutic::findOrFail($boutic->id);
        return view('show.boutic', ['boutic' => $boutic_show]);
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
        $boutic_edit = Boutic::findOrFail($boutic->id);
        return view('edit.boutic', ['boutic' => $boutic_edit]);
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
            $boutic_up = Boutic::find($boutic->id);
            $boutic_up->name = $request->name;
            $boutic_up->save();
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
        $boutic_del = Boutic::find($boutic->id);
        $boutic_del->delete();

        return back();
    }
}
