<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function boutic()
    {
        return $this->belongsTo('App\Boutic');
    }
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

}
