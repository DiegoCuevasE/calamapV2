<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SitioTuristico extends Model
{
    public function horarios()
    {
        return $this->belongsToMany(Horario::class,'horario_sitio')->withPivot('hora_inicio', 'hora_termino', 'hora_inicio_dos','hora_termino_dos');
    }

    public function imagenSitioTuristicos()
    {
        return $this->hasMany(ImagenSitioTuristico::class);
    }

    public function servicios()
    {
        return $this->belongsToMany(Servicio::class,'sitio_turistico_servicio');
    }
}
