<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    public function products() {
        return $this->hasMany('App\Product');
    }

    public function maintype()
    {
        return $this->belongsTo('App\Subtype');
    }
}
