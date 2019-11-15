<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    public function mypes()
    {
        return $this->belongsToMany(Mype::class,'servicio_mype');
    }

    public function sitios()
    {
        return $this->belongsToMany(SitioTuristico::class,'sitio_turistico_servicio');
    }
}
