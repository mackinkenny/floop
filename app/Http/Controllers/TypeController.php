<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{

    public function create()
    {
        //
        return view('create.type');
    }

    public function store(Request $request)
    {
        //
        $type = new Type();
        $type->name = $request->name;
        $type->save();

        return back();
    }


    public function show(Type $type)
    {
        //
        $typeShow = Type::find($type->id);
        return view('show.type', ['type' => $typeShow]);
    }


    public function update(Request $request, Type $type)
    {
        //
        if($request)
        {
            $typeUp = Type::find($type->id);
            $typeup->name = $request->name;
            $typeUp->save();
        }

        return back();
    }


    public function destroy(Type $type)
    {
        //
        $typeDel = Type::find($type->id);
        $typeDel->delete();


    }
}
