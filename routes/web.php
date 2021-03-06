<?php
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use App\Evento;
use App\SitioTuristico;

//


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('visita/post', 'VisitaController@store');

Route::get('adminMype/historico', 'GraficoController@indexI')->name('historico');
//Route::get('adminMype/listaMypes', 'MypeController@index');
//Route::get('adminMype/vistaMypes', 'MypeController@index');
//Route::get('adminMype/registroMype', 'MypeController@llenarForm');

Route::get('adminMype', 'MypeController@Index')->name('adminMype');
//Route::post('adminMype/registrarMype', 'MypeController@store')->name('adminMype/registrarMype');
Route::get('adminMype/editarMype', 'MypeController@edit')->name('adminMype/editarMype');
Route::get('subirimagen', 'FotoController@index');
Route::post('subirimagen', 'FotoController@uploadImage');


Route::get('/', function () {
    $date = today()->format('Y-m-d');

    $eventos=Evento::orderBy('fecha_inicio_evento', 'ASC')->where('fecha_inicio_evento', '>=', $date)->paginate(6);

    $sitios= SitioTuristico::paginate(6);
    return view('inicio2',['eventos'=> $eventos,'sitios'=> $sitios]);
    
});

Route::get('adminMype/adminMype', function () {
    return view('adminMype/adminMype');
})->name('adminMype');

Route::get('formulario', function () {
    return view('formulario');
});

Route::get('inicio', function () {
    return view('inicio');
});


Route::get('inicio2', function () {
    return view('inicio2');
});

Route::get('formulario2', function () {
    return view('formulario2');
});


Route::get('registroDueno', function () {
    return view('registroDueno');
});

Route::get('vistaEvento', function () {
    return view('vistaEvento');
});

Route::get('admin/agregarEvento', function () {
    return view('admin/agregarEvento');
})->name('agregarEvento');

Route::get('admin/gestionEvento', function () {
    return view('admin/gestionEvento');
})->name('gestionevento');

//Rutas Turisticas

Route::get('RutaCascoHistorico', function () {return view('vistaRutaHistorico');})->name('vistaCascoHistorico');
Route::get('RutaOasisCalamaUrbano', function () {return view('vistaRutaOasis');})->name('vistaOasis');
Route::get('RutaAncestralPatrimonial', function () {return view('vistaRutaAncestral');})->name('vistaAncestral');


Route::group(['middleware' => ['auth']], function () {

    Route::group(['middleware' => ['usuarioAdmin']], function () {


        //Socios
        Route::get('admin/gestionSocio', 'UserController@index')->name('gestionSocio');
        Route::get('user-list-pdf', 'UserController@exportPdf')->name('users.pdf');


        //Membresia
        Route::get('admin/gestionMembresia', 'MembresiaController@index')->name('gestionMembresia');
        Route::post('admin/registrarMembresia', 'MembresiaController@store')->name('registrarMembresia');
        Route::put('admin/updateMembresia{id}', 'MembresiaController@update')->name('updateMembresia');

        //Sitios turísticos!!
        Route::get('admin/gestionSitio', 'SitioturisticoController@index')->name('gestionSitio');
        Route::get('admin/agregarSitio', 'SitioturisticoController@llenarForm')->name('agregarSitio');
        Route::post('admin/registrarSitio', 'MypeController@store')->name('registrarSitio');

        //Eventos!!
        Route::get('admin/gestionEvento', 'EventoController@index')->name('gestionEvento');
        Route::get('admin/agregarEvento', 'EventoController@create')->name('agregarEvento');
        Route::post('admin/registrarEvento', 'EventoController@store')->name('registrarEvento');
        Route::delete('admin/eliminarEvento{id}', 'EventoController@destroy')->name('eliminarEvento');
        Route::get('admin/editarEvento{id}', 'EventoController@edit')->name('editarEvento');
        Route::put('admin/updateEvento{id}', 'EventoController@update')->name('updateEvento');

        //MyPES!!
        Route::get('admin/gestionMype/update', 'MypeController@updateStatus')->name('users.update.status');

    });

    Route::group(['middleware' => ['usuarioMype'||'usuarioAdmin']], function () {
        Route::get('admin/home', 'GraficoController@indexH')->name('inicioAdmin');;

        //anual
        //mensual
        Route::get('mype/home', 'GraficoController@indexI')->name('inicioMype');

        //MyPES!!
        Route::get('admin/gestionMype', 'MypeController@index')->name('gestionMype');
        Route::get('admin/agregarMype', 'MypeController@llenarForm')->name('agregarMype');
        Route::post('admin/registrarMype', 'MypeController@store')->name('registrarMype');
        Route::delete('admin/eliminarMype{id}', 'MypeController@destroy')->name('eliminarMype');
        Route::get('admin/editarMype{id}', 'MypeController@edit')->name('editarMype');
        Route::put('admin/updateMype{id}', 'MypeController@update')->name('updateMype');

    });

});

Route::get('Hoteles', 'MypeVisitasController@getIndex')->name('hoteles');
Route::get('Artesanias', 'MypeVisitasController@getIndexA')->name('artesanias');
Route::get('Restaurantes', 'MypeVisitasController@getIndexR')->name('restaurantes');
Route::get('Turismo', 'MypeVisitasController@getIndexT')->name('turismo');
Route::get('Comercio', 'MypeVisitasController@getIndexC')->name('comercio');

Route::get('SitiosTuristicos', 'SitioturisticoController@MostrarSitios')->name('sitios');
Route::get('sitio{id}', 'SitioturisticoController@MostrarSitio')->name('sitio');

Route::get('eventos', 'EventoController@MostrarEventos')->name('portal');

Route::get('evento{id}', 'EventoController@MostrarEvento')->name('evento');

Route::get('mype/hoteles', 'MypeVisitasController@getIndex');

//Route::get('/sitioTuristico/{sitio_id}', 'SitioturisticoController@MostrarSitio');

Route::get('admin/agregarSitioTuristico');
Route::get('sitio')->name('sitio');

Route::resource('admin','SitioturisticoController');

Route::get('vistaSitio', function () {
    return view('vistaSitio');
});

Route::resource('moduloMype', 'MypeController');

Auth::routes();

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

Route::get('/home', 'HomeController@indexH')->name('home');







