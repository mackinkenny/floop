<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    //
    public function boutics() {
        return $this->hasMany('App\Boutic');
    }

    public function products() {
        return $this->hasManyThrough('App\Product', 'App\Boutic');
    }
}
