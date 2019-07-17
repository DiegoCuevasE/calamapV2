<?php
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;

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

Route::get('adminMype/grafico', 'GraficoController@index');
Route::get('adminMype/historico', 'GraficoController@indexI')->name('historico');
Route::get('adminMype/vistaMypes', 'MypeController@index');
Route::get('adminMype/registroMype', 'MypeController@llenarForm');

Route::get('adminMype', 'MypeController@Index')->name('adminMype');
Route::post('adminMype/registrarMype', 'MypeController@store')->name('adminMype/registrarMype');
Route::get('adminMype/editarMype', 'MypeController@edit')->name('adminMype/editarMype');
Route::get('subirimagen', 'FotoController@index');
Route::post('subirimagen', 'FotoController@uploadImage');


Route::get('/', function () {
    return view('inicio2');
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



Route::get('mype/hoteles', 'MypeVisitasController@getIndex')->name('hoteles');

Route::get('mype/artesanias', 'MypeVisitasController@getIndexA')->name('artesanias');

Route::get('mype/restaurantes', 'MypeVisitasController@getIndexR')->name('restaurantes');

Route::get('/sitioTuristico/{sitio_id}', 'SitioturisticoController@MostrarSitio');

Route::get('admin/agregarSitioTuristico');
Route::get('sitio')->name('sitio');
Route::get('sitios', 'SitioturisticoController@MostrarSitios')->name('sitios');

Route::resource('admin','SitioturisticoController');

Route::get('vistaSitio', function () {
    return view('vistaSitio');
});

Route::resource('moduloMype', 'MypeController');



Auth::routes();

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

Route::get('/home', 'HomeController@index')->name('home');







