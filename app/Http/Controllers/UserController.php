<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Barryvdh\DomPDF\Facade as PDF;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('tipo_usuario',1)
        ->paginate(6);

        return view('admin/gestionSocio')->with('users',$users);
    }

    public function exportPdf()
    {
        $users = User::where('tipo_usuario',1)
        ->get();

        $pdf =PDF::loadView('pdf.users',compact('users'));
        $pdf->setPaper('a4','landscape');

        return $pdf->stream('Listado-Socios.pdf');
    }
}
