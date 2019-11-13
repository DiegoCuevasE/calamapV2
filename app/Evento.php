<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{

    public function imageneventos()
    {
        return $this->hasMany(ImagenEvento::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
