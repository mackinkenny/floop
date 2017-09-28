<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boutic extends Model
{
    //
    protected $fillable = [
        'name', 'img_path',
    ];

    public function center() {
        return $this->belongsTo('App\Center');
    }
    public function users(){
        return $this->belongsToMany('App\User');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function notices() {
        return $this->hasMany('App\Notice')->orderBy('id');
    }

    public function discounts() {
        return $this->hasMany('App\Discount');
    }
}
