<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Maintype;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class MaintypeController extends Controller
{
    //
    public function create()
    {
        //
        $cats = Cat::all();
        return view('create.maintype', ['cats' => $cats]);
    }

    public function store(Request $request)
    {
        //
        $type = new Maintype();
        $type->cat_id = $request->cat_id;
        $type->name = $request->name;
        if ($request->hasFile('img_path')) {
            $avatar = $request->file('img_path');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->save('uploads/maintypes/' . $filename);
            $type->img_path = $filename;

        }
        $type->save();
        return back();
    }
}
