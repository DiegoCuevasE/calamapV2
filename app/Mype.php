<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mype extends Model
{
    public function horarios()
    {
        return $this->belongsToMany(Horario::class,'horario_mype')->withPivot('hora_inicio', 'hora_termino', 'hora_inicio_dos','hora_termino_dos');
    }

    public function imagenmypes()
    {
        return $this->hasMany(Imagenmype::class);
    }

    public function servicios()
    {
        return $this->belongsToMany(Servicio::class,'servicio_mype');
    }

    public function idiomas()
    {
        return $this->belongsToMany(Idioma::class,'idioma_mype');
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function membresia()
    {
    	return $this->hasOne(Membresia::class);
    }
}
