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
    public function color() {
        return $this->belongsTo('App\Color');
    }
    public function size()
    {
        return $this->belongsTo('App\Size');
    }
    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
    public function boutic()
    {
        return $this->belongsTo('App\Boutic');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }

}
