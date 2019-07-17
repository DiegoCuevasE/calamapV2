<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagenmype extends Model
{
    public function mype()
    {
    	return $this->belongsTo(Mype::class);
    }
}
