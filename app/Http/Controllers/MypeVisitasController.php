<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mype;
use DB;

class MypeVisitasController extends Controller
{
    public function getIndex(){
        $mypes = Mype::where('rubro_mype','hoteleria')->paginate(4);
        // = DB::table('mypes')->where('rubro_mype','hoteleria')->paginate(4);
        return view('vistaMypes', ['mypes' => $mypes]);
    }

    public function getIndexR(){

        $mypes = Mype::where('rubro_mype','gastronomia')->paginate(4);

        return view('vistaMypes', ['mypes' => $mypes]);
    }

    public function getIndexA(){

        $mypes = Mype::where('rubro_mype','artesanias')->paginate(4);

        return view('mype/artesanias', ['mypes' => $mypes]);
    }

    
}
