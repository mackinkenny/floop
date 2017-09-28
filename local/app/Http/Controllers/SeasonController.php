<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeasonController extends Controller
{
    public function create()
    {
        //
        return view('create.season');
    }

    public function store(Request $request)
    {
        //
        $season = new Season();
        $season->name = $request->name;
        $season->save();

        return back();
    }


    public function show(Season $season)
    {
        //
        $seasonShow = Season::find($season->id);
        return view('show.season', ['season' => $seasonShow]);
    }


    public function update(Request $request, Season $season)
    {
        //
        if($request)
        {
            $seasonUp = Season::find($season->id);
            $seasonup->name = $request->name;
            $seasonUp->save();
        }

        return back();
    }

    public function destroy(Type $season)
    {
        //
        $seasonDel = Season::find($season->id);
        $seasonDel->delete();


    }
}
