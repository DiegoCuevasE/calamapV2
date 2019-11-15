<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mype;
use DB;

class MypeVisitasController extends Controller
{
    public function getIndex(){
        $mypes = Mype::where('rubro_mype','hoteleria')
        ->where('estado_mype','1')
        ->paginate(4);
        $titulo="Busca el mejor lugar para descansar";
        $subtitulo="Descubre los hoteles y hospedajes disponibles en ciudad.";
        
        return view('vistaMypes', ['mypes' => $mypes, 'titulo'=> $titulo, 'subtitulo'=>$subtitulo]);
    }

    public function getIndexR(){

        $mypes = Mype::where('rubro_mype','gastronomia')
        ->where('estado_mype','1')
        ->paginate(4);
        $titulo="Visita los mejores lugares para comer";
        $subtitulo="Descubre los restaurantes disponibles en la ciudad.";

        return view('vistaMypes', ['mypes' => $mypes, 'titulo'=> $titulo, 'subtitulo'=>$subtitulo]);
    }

    public function getIndexA(){

        $mypes = Mype::where('rubro_mype','artesanias')
        ->where('estado_mype','1')
        ->paginate(4);
        $titulo="Visita a los artesanos de la zona";
        $subtitulo="Encuentra a los verdaderos artesanos de la ciudad.";

        return view('vistaMypes', ['mypes' => $mypes, 'titulo'=> $titulo, 'subtitulo'=>$subtitulo]);
    }

    public function getIndexT(){

        $mypes = Mype::where('rubro_mype','turismo')
        ->where('estado_mype','1')
        ->paginate(4);
        $titulo="Conoce la ciudad y sus alrededores con las mejores agencias de turismo";
        $subtitulo="Conoce la rica cultura que ofrece la ciudad de Calama";

        return view('vistaMypes', ['mypes' => $mypes, 'titulo'=> $titulo, 'subtitulo'=>$subtitulo]);
    }

    public function getIndexC(){

        $mypes = Mype::where('rubro_mype','comercio')
        ->where('estado_mype','1')
        ->paginate(4);
        $titulo="Descubre el comercio que ofrece la ciudad";
        $subtitulo="Encuentra desde frutas y verduras hasta ropa a la moda";

        return view('vistaMypes', ['mypes' => $mypes, 'titulo'=> $titulo, 'subtitulo'=>$subtitulo]);
    }

    
}
