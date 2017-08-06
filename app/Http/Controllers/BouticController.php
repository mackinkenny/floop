<?php

namespace App\Http\Controllers;

use App\Boutic;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user =Auth::user();
        return view('all.boutic', ['boutics' => $boutics, 'user' => $user]);
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
        return view('create.boutic',['users' => $users]);
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
        $boutic->user_id = $request->user_id;
        $boutic->save();

        $user = User::all()->where('id', '=', $boutic->user_id)->first();
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
