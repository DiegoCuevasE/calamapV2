<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SitioTuristico extends Model
{
    public function imagenSitioTuristicos()
    {
        return $this->hasMany(ImagenSitioTuristico::class);
    }
    public function servicios()
    {
        return $this->belongsToMany(Servicio::class,'sitio_turistico_servicio');
    }
}
