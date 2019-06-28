<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagensitioturistico extends Model
{
    protected $fillable = ['enlace_imagen_turistico','tipo_imagen_turistico','thumbnail'];

    public function Sitioturistico()
    {
        return $this->belongsTo(Sitioturistico::class);
    }
}
