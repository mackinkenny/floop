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
        return $this->belongsTo('Center');
    }
}
