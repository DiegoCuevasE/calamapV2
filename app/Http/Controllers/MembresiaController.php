<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mype;
use App\Membresia;
use Carbon\Carbon;
use App\User;

class MembresiaController extends Controller
{
    public function index()
    {
        $date = date('Y-m-d');
        $mypes = Mype::all();
        $mypesP = Mype::all();
        return view('admin.gestionMembresia',['mypes'=>$mypes,'mypesP'=>$mypesP]);
    }

    public function store(Request $request){

        //$mype = Mype::find($id);
        $membresia = new Membresia();
       

        $membresia->mype_id=request('mype_id');
        $membresia->fecha_inicio=(Carbon::now())->format('Y-m-d');
        $membresia->fecha_expiracion=(Carbon::now()->addMonths(request('meses')))->format('Y-m-d');
        $membresia->precio=request('precio');   
        $membresia->save();
        
        return redirect('admin/gestionMembresia');
    }

    public function update(Request $request, $id)
    {
        $mype = Mype::find($id);
        $exp = $mype->membresia->fecha_expiracion;

        if($exp>=(Carbon::now()->format('Y-m-d'))){

            $mype->membresia->fecha_expiracion=(Carbon::parse($exp)->addMonths(request('meses')))->format('Y-m-d');
            $mype->membresia->update();
            return redirect('admin/gestionMembresia');

        }else{

            $mype->membresia->fecha_inicio=(Carbon::now())->format('Y-m-d');
            $mype->membresia->fecha_expiracion=(Carbon::now()->addMonths(request('meses')))->format('Y-m-d');
            $mype->membresia->update();
            return redirect('admin/gestionMembresia');
        }

    }
}
