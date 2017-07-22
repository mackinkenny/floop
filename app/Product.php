<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function brand() {
        return $this->belongsTo('App\Brand');
    }

    public function cat() {
        return $this->belongsTo('App\Cat');
    }
}
