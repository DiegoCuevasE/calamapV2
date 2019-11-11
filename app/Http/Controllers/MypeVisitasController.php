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
        
        return view('vistaMypes', ['mypes' => $mypes]);
    }

    public function getIndexR(){

        $mypes = Mype::where('rubro_mype','gastronomia')
        ->where('estado_mype','1')
        ->paginate(4);

        return view('vistaMypes', ['mypes' => $mypes]);
    }

    public function getIndexA(){

        $mypes = Mype::where('rubro_mype','artesanias')
        ->where('estado_mype','1')
        ->paginate(4);

        return view('vistaMypes', ['mypes' => $mypes]);
    }

    public function getIndexT(){

        $mypes = Mype::where('rubro_mype','turismo')
        ->where('estado_mype','1')
        ->paginate(4);

        return view('vistaMypes', ['mypes' => $mypes]);
    }

    public function getIndexC(){

        $mypes = Mype::where('rubro_mype','bazares')
        ->where('estado_mype','1')
        ->paginate(4);

        return view('vistaMypes', ['mypes' => $mypes]);
    }

    
}
