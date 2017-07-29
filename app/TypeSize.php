<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeSize extends Model
{
    //
    public function sizes()
    {
        return $this->hasMany('Size');
    }

}
