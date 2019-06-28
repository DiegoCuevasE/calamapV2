<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagenmype extends Model
{
    public function Mypes(){
        return $this->belongsTo(Mypes::class);
    }
}