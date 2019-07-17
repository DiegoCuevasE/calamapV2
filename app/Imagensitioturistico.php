<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenSitioTuristico extends Model
{
    public function sitioTuristicos()
    {
    	return $this->belongsTo(SitioTuristico::class);
    }
}
