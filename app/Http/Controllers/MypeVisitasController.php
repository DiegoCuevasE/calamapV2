<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mypes;
use DB;

class MypeVisitasController extends Controller
{
    public function getIndex(){

        $mypes = DB::table('mypes')->where('rubro_mype','hoteleria')->paginate(4);
        return view('mype/hoteles', ['mypes' => $mypes]);
    }

    public function getIndexR(){

        $mypes = DB::table('mypes')->where('rubro_mype','gastronomia')->paginate(4);

        return view('mype/restaurantes', ['mypes' => $mypes]);
    }

    public function getIndexA(){

        $mypes = DB::table('mypes')->where('rubro_mype','artesanias')->paginate(4);

        return view('mype/artesanias', ['mypes' => $mypes]);
    }

    
}
