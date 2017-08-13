<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    //
    public function products() {
        return $this->hasMany('App\Product');
    }

    public function boutic() {
        return $this->belongsTo('App\Boutic');
    }
}
