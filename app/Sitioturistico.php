<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Imagensitioturistico;

class Sitioturistico extends Model
{
    public function Imagensitioturistico()
    {
        return $this->hasMany(Imagensitioturistico::class);
    }
    
}
