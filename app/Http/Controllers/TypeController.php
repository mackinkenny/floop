<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Type;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class TypeController extends Controller
{

    public function create()
    {
        //
        $cats = Cat::all();
        return view('create.type', ['cats' => $cats]);
    }

    public function store(Request $request)
    {
        //
        $type = new Type();
        $type->cat_id = $request->cat_id;
        $type->name = $request->name;
        if ($request->hasFile('img_path')) {
            $avatar = $request->file('img_path');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(50, 50)->save(public_path('uploads/types/' . $filename));
            $type->img_path = $filename;

        }
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
            $typeUp->name = $request->name;
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
