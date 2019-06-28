<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mypes extends Model
{
    protected $fillable = ['nombre_fantasia_mype'];

    public function Imagenmype(){
        return $this->hasMany(Imagenmype::class);
    }

}
