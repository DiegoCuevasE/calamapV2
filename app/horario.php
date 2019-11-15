<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    public function mypes()
    {
        return $this->belongsToMany(Mype::class,'horario_mype')->withPivot('hora_inicio', 'hora_termino', 'hora_inicio_dos','hora_termino_dos');
    }

    public function sitios()
    {
        return $this->belongsToMany(SitioTuristico::class,'horario_sitio');
    }
}
