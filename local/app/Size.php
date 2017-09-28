<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function type()
    {
        return $this->belongsTo('App\TypeSize');
    }
    public function products(){
        return $this->hasMany('App\Product');
    }

}
