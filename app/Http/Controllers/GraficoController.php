<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use DateTime;
use App\User;
use App\Mype;
use DB;
use Carbon\Carbon;
use App\Visita;
use Khill\Lavacharts\Lavacharts;
use Auth;
class GraficoController extends Controller
{

    public function index()
    {
        
        $date = \Carbon\Carbon::today()->subDays(30);
        $idMype = DB::table('mypes')->where('user_id', Auth::id())->value('id'); 
   
        $cantVisitas = DB::table('visitas')
        ->where('mype_id', $idMype)
        ->where('created_at', '>=', $date)
        ->count();

        $date1 = new DateTime('tomorrow -1 month');

        $users2 = DB::table('mypes')
        ->leftJoin('visitas', 'mypes.id', '=', 'visitas.mype_id')
        ->where('visitas.mype_id', $idMype)
        ->where('visitas.created_at', '>=', $date)
        ->get();

        $chart = Charts::database($users2, 'area', 'highcharts')
        ->title("<strong>Visitantes del mes</strong>")
        ->elementLabel("Total de visitas diarias")
        ->dimensions(500, 500)
        ->responsive(true)
        ->groupByDay();
         


       

        
        
        
        
        // $contH = DB::select( DB::raw("SELECT COUNT(visitas.id) FROM visitas INNER JOIN users ON visitas.user_id = users.id AND users.genero = 0 AND visitas.mype_id = $idMype AND visitas.created_at >='$date'"));
        $contH = DB::table('visitas')
        ->join('users', 'users.id', '=', 'visitas.user_id')
        ->where('users.genero', '=', 0)
        ->where('visitas.mype_id', '=',  $idMype)
        ->where('visitas.created_at', '>=', $date)
        ->select('visitas.id')
        ->count();

        $contM = DB::table('visitas')
        ->join('users', 'users.id', '=', 'visitas.user_id')
        ->where('users.genero', '=', 1)
        ->where('visitas.mype_id', '=',  $idMype)
        ->where('visitas.created_at', '>=', $date)
        ->select('visitas.id')
        ->count();

         $pie  = Charts::create('donut', 'highcharts')
         ->title('<strong>Género de los visitantes</strong>')
         ->labels(['Hombre', 'Mujer'])
         ->values([$contH,$contM])
         ->dimensions(450, 450)
         ->responsive(true);     
         






         



         $today15 = Carbon::now();
         $sub15 = $today15->subYears(15);
         $today25 = Carbon::now();
         $sub25 = $today25->subYears(25);

         $rango1 = DB::table('visitas')
         ->join('users', 'visitas.id' ,'=' ,'users.id')
         ->whereBetween("users.fechaNac",[$sub25,$sub15])
         ->where('visitas.mype_id', '=',  $idMype)
         ->where('visitas.created_at', '>=', $date)
         ->select('visitas.id')
         ->count();
         

         $today35 = Carbon::now();
         $sub35 = $today35->subYears(35);
         $today26 = Carbon::now();
         $sub26 = $today26->subYears(25);

         $rango2 = DB::table('visitas')
         ->join('users', 'visitas.id' ,'=' ,'users.id')
         ->whereBetween("users.fechaNac",[$sub35,$sub26])
         ->where('visitas.mype_id', '=',  $idMype)
         ->where('visitas.created_at', '>=', $date)
         ->select('visitas.id')
         ->count();


         $today45 = Carbon::now();
         $sub45 = $today45->subYears(45);
         $today36 = Carbon::now();
         $sub36 = $today36->subYears(35);

         $rango3 = DB::table('visitas')
         ->join('users', 'visitas.id' ,'=' ,'users.id')
         ->whereBetween("users.fechaNac",[$sub45,$sub36])
         ->where('visitas.mype_id', '=',  $idMype)
         ->where('visitas.created_at', '>=', $date)
         ->select('visitas.id')
         ->count();


         $Gedad = Charts::create('bar','highcharts')
        ->title('<strong>Edad de los visitantes</strong>')
        ->elementLabel('Edad de los visitantes')
        ->labels(['Entre 15 a 25', 'Entre 26 a 35', 'Entre 36 a 45'])
        ->values([$rango1,$rango2,$rango3])
        ->dimensions(450,450)
        ->responsive(true);




         
         return view('admin/home',compact('pie','chart', 'Gedad'));

    }










    public function indexI()
    {
        
        $date = \Carbon\Carbon::today()->subDays(30);
        $iduser = Auth::id();

        
        
        $idMype = DB::select(DB::raw(" SELECT id FROM mypes where user_id =".$iduser.""));
        $idMype = array();
        $stringData = implode(', ', $idMype);
       return dd($stringData);
        $cantVisitas = DB::table('visitas')
        ->where('mype_id', $idMype)
        ->get();

        $date1 = new DateTime('tomorrow -1 month');


        
    $asd = DB::select('SELECT * FROM mypes where user_id = '.$iduser.'');
        $users2 = DB::table('mypes')
        ->leftJoin('visitas', 'mypes.id', '=', 'visitas.mype_id')
        ->where('visitas.mype_id', $idMype)
        ->get();

       
        $chart = Charts::database($cantVisitas, 'area', 'highcharts')
        ->title("<strong>Visitantes por mes</strong>")
        ->elementLabel("Total de visitas mensual")
        ->dimensions(500, 500)
        ->responsive(true)
        ->groupByMonth();
         


       

        
        
        
        
        // $contH = DB::select( DB::raw("SELECT COUNT(visitas.id) FROM visitas INNER JOIN users ON visitas.user_id = users.id AND users.genero = 0 AND visitas.mype_id = $idMype AND visitas.created_at >='$date'"));
        $contH = DB::table('visitas')
        ->join('users', 'users.id', '=', 'visitas.user_id')
        ->where('users.genero', '=', 0)
        ->where('visitas.mype_id', '=',  $idMype)
        ->select('visitas.id')
        ->count();

        $contM = DB::table('visitas')
        ->join('users', 'users.id', '=', 'visitas.user_id')
        ->where('users.genero', '=', 1)
        ->where('visitas.mype_id', '=',  $idMype)
        ->select('visitas.id')
        ->count();

         $pie  = Charts::create('donut', 'highcharts')
         ->title('<strong>Género de los visitantes</strong>')
         ->labels(['Hombre', 'Mujer'])
         ->values([$contH,$contM])
         ->dimensions(450, 450)
         ->responsive(true);     
         






         



         $today15 = Carbon::now();
         $sub15 = $today15->subYears(15);
         $today25 = Carbon::now();
         $sub25 = $today25->subYears(25);

         $rango1 = DB::table('visitas')
         ->join('users', 'visitas.id' ,'=' ,'users.id')
         ->whereBetween("users.fechaNac",[$sub25,$sub15])
         ->where('visitas.mype_id', '=',  $idMype)
         ->select('visitas.id')
         ->count();
         

         $today35 = Carbon::now();
         $sub35 = $today35->subYears(35);
         $today26 = Carbon::now();
         $sub26 = $today26->subYears(25);

         $rango2 = DB::table('visitas')
         ->join('users', 'visitas.id' ,'=' ,'users.id')
         ->whereBetween("users.fechaNac",[$sub35,$sub26])
         ->where('visitas.mype_id', '=',  $idMype)
         ->select('visitas.id')
         ->count();


         $today45 = Carbon::now();
         $sub45 = $today45->subYears(45);
         $today36 = Carbon::now();
         $sub36 = $today36->subYears(35);

         $rango3 = DB::table('visitas')
         ->join('users', 'visitas.id' ,'=' ,'users.id')
         ->whereBetween("users.fechaNac",[$sub45,$sub36])
         ->where('visitas.mype_id', '=',  $idMype)
         ->select('visitas.id')
         ->count();


         $Gedad = Charts::create('bar','highcharts')
        ->title('<strong>Edad de los visitantes</strong>')
        ->elementLabel('Edad de los visitantes')
        ->labels(['Entre 15 a 25', 'Entre 26 a 35', 'Entre 36 a 45'])
        ->values([$rango1,$rango2,$rango3])
        ->dimensions(450,450)
        ->responsive(true);


        $paises = DB::table('visitas')->distinct()->get('visitas.pais');
        $lava = new Lavacharts; 
        $grafico= $lava->DataTable();
        $grafico->addStringColumn('Pais')->addNumberColumn('Visitas');
        foreach ($paises as $pais) {
              $grafico->addRow(array($pais->pais, DB::table('visitas')->where('visitas.pais', '=',  $pais->pais)->count()))    ;
        }
                       
                   
        $lava->GeoChart('Visitas', $grafico);
         
         return view('admin/home',compact('pie','chart', 'Gedad','cantVisitas','lava'));

    }


    public function indexH()
    {
        
        $date = \Carbon\Carbon::today()->subDays(30);
        $idMype = DB::table('mypes')->where('user_id', Auth::id())->value('id'); 
   

        $cantVisitas = DB::table('visitas')
        ->count();


        $date1 = new DateTime('tomorrow -1 month');


        $users2 = DB::table('mypes')
        ->leftJoin('visitas', 'mypes.id', '=', 'visitas.mype_id')
        ->get();

        
        $chart = Charts::database($users2, 'area', 'highcharts')
        ->title("<strong>Visitantes por mes</strong>")
        ->elementLabel("Total de visitas mensual")
        ->dimensions(500, 500)
        ->responsive(true)
        ->groupByMonth();
         


       

        
        
        
        
        // $contH = DB::select( DB::raw("SELECT COUNT(visitas.id) FROM visitas INNER JOIN users ON visitas.user_id = users.id AND users.genero = 0 AND visitas.mype_id = $idMype AND visitas.created_at >='$date'"));
        $contH = DB::table('visitas')
        ->join('users', 'users.id', '=', 'visitas.user_id')
        ->where('users.genero', '=', 0)
        ->select('visitas.id')
        ->count();

        $contM = DB::table('visitas')
        ->join('users', 'users.id', '=', 'visitas.user_id')
        ->where('users.genero', '=', 1)
        ->select('visitas.id')
        ->count();

         $pie  = Charts::create('donut', 'highcharts')
         ->title('<strong>Género de los visitantes</strong>')
         ->labels(['Hombre', 'Mujer'])
         ->values([$contH,$contM])
         ->dimensions(450, 450)
         ->responsive(true);     
         






         



         $today15 = Carbon::now();
         $sub15 = $today15->subYears(15);
         $today25 = Carbon::now();
         $sub25 = $today25->subYears(25);

         $rango1 = DB::table('visitas')
         ->join('users', 'visitas.id' ,'=' ,'users.id')
         ->whereBetween("users.fechaNac",[$sub25,$sub15])
         ->select('visitas.id')
         ->count();
         

         $today35 = Carbon::now();
         $sub35 = $today35->subYears(35);
         $today26 = Carbon::now();
         $sub26 = $today26->subYears(25);

         $rango2 = DB::table('visitas')
         ->join('users', 'visitas.id' ,'=' ,'users.id')
         ->whereBetween("users.fechaNac",[$sub35,$sub26])
         ->select('visitas.id')
         ->count();


         $today45 = Carbon::now();
         $sub45 = $today45->subYears(45);
         $today36 = Carbon::now();
         $sub36 = $today36->subYears(35);

         $rango3 = DB::table('visitas')
         ->join('users', 'visitas.id' ,'=' ,'users.id')
         ->whereBetween("users.fechaNac",[$sub45,$sub36])
         ->select('visitas.id')
         ->count();


         $Gedad = Charts::create('bar','highcharts')
        ->title('<strong>Edad de los visitantes</strong>')
        ->elementLabel('Edad de los visitantes')
        ->labels(['Entre 15 a 25', 'Entre 26 a 35', 'Entre 36 a 45'])
        ->values([$rango1,$rango2,$rango3])
        ->dimensions(450,450)
        ->responsive(true);


        $paises = DB::table('visitas')->distinct()->get('visitas.pais');
        $lava = new Lavacharts; 
        $grafico= $lava->DataTable();
        $grafico->addStringColumn('Pais')->addNumberColumn('Visitas');
        foreach ($paises as $pais) {
              $grafico->addRow(array($pais->pais, DB::table('visitas')->where('visitas.pais', '=',  $pais->pais)->count()))    ;
        }
                       
                   
        $lava->GeoChart('Visitas', $grafico);
         
         return view('admin/home',compact('pie','chart', 'Gedad','cantVisitas','lava'));

    }
}

