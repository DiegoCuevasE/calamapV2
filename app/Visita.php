<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    public function users(){

        return $this->belongsToMany('User');
    }


    public function mypes(){

        return $this->belongsToMany('Mypes');
    }

}
