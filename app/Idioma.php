<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    public function mypes()
    {
        return $this->belongsToMany(Mypes::class,'idioma_mype');
    }
}
