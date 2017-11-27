<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintype extends Model
{
    //
    public function types()
    {
        return $this->HasMany('App\Subtype');
    }
    public function cat() {
        return $this->belongsTo('App\Cat');
    }
}
