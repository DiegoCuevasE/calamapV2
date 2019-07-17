<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SitioTuristico extends Model
{
    public function imagenSitioTuristicos()
    {
        return $this->hasMany(ImagenSitioTuristico::class);
    }
}
