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
    public function type() {
        return $this->belongsTo('App\Type');
    }
    public function season() {
        return $this->belongsTo('App\Season');
    }
    public function color() {
        return $this->belongsTo('App\Color');
    }
    public function size()
    {
        return $this->belongsTo('App\Size');
    }

    public function boutic()
    {
        return $this->belongsTo('App\Boutic');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }

    public function discount()  {
        return $this->belongsTo('App\Discount');
    }

    public function photos() {
        return $this->hasMany('App\Photo');
    }

}
