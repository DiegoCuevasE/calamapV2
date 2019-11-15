<?php

namespace App\Http\Controllers;

use App\Evento;
use DateTime;
use Illuminate\Http\Request;
use DB; 
use File;
use Image;
use App\ImagenEvento;
use Illuminate\Support\Facades\Auth;

class EventoController extends Controller
{
    protected $photo;
    public function __construct(
        ImagenEvento $photo )
    {
        $this->photo = $photo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos= Evento::paginate(10);

        return view('admin.gestionEvento')->with('eventos',$eventos);
    }

    public function MostrarSitio($sitio_id){
        $evento = Evento::where('id',$sitio_id)->first();
        return view('evento', ['evento'=>$evento]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/agregarEvento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        $evento = new Evento();

        //reemplazar '1' por usuario logeado
        $evento->user_id= Auth::user()->id;

        $evento->titulo_evento=request('titulo_evento');
        $evento->direccion_evento=request('direccion_evento');
        $evento->entrada_evento=request('entrada_evento');

        if($evento->entrada_evento) { $evento->precio_evento=request('precio_evento'); }

        $evento->hashtag_evento=request('hashtag_evento');
        
        if(request('hora_inicio_evento')){$evento->hora_inicio_evento=date('h:i', strtotime(request('hora_inicio_evento')));}
        if(request('hora_termino_evento')){$evento->hora_termino_evento=date('h:i', strtotime(request('hora_termino_evento')));}

        $evento->fecha_inicio_evento=DateTime::createFromFormat('d/m/Y', request('fecha_inicio_evento'));

        if( $evento->fecha_inicio_evento && request('fecha_termino_evento')){
        $evento->fecha_termino_evento=DateTime::createFromFormat('d/m/Y', request('fecha_termino_evento'));
        }
        
        $evento->descripcion_evento=ucfirst(mb_strtolower(request('descripcion_evento')));

        if($evento->save()){

            $idEvento = DB::table('eventos')->where('titulo_evento',request('titulo_evento'))->value('id');
            
            if ($request->hasFile('enlace_imagen_evento')) {
                $portada = $request->file('enlace_imagen_evento');
                $org_img = $thm_img = true;
                $newPhoto = new $this->photo;
                //get file name of image  and concatenate with 4 random integer for unique
                $filename = rand(1111,9999).time().'.'.$portada->getClientOriginalExtension();
                //path of image for upload
                $org_path = 'images/originals/' . $filename;
                $thm_path = 'images/thumbnails/' . $filename;
                $newPhoto->enlace_imagen_evento = 'images/originals/'.$filename;
                $newPhoto->thumbnail = 'images/thumbnails/'.$filename;
                $newPhoto->tipo_imagen_evento = 'portada';
                $newPhoto->evento_id = $idEvento;
                //don't upload file when unable to save name to database
                if ( ! $newPhoto->save()) {
                    return false;
                }
                // upload image to server
                if (($org_img && $thm_img) == true) {
                Image::make($portada)->fit(900, 500, function ($constraint) {
                        $constraint->upsize();
                    })->save($org_path);
                Image::make($portada)->fit(270, 160, function ($constraint) {
                    $constraint->upsize();
                })->save($thm_path);
                }
            }

            //////////////////////////////////////////////////////////////////////////////////

            if ($request->hasFile('image')) {
                $images = $request->file('image');
                $org_img = $thm_img = true;
                // loop through each image to save and upload
                foreach($images as $key => $image) {
                    //create new instance of Photo class
                    $newPhoto = new $this->photo;
                    //get file name of image  and concatenate with 4 random integer for unique
                    $filename = rand(1111,9999).time().'.'.$image->getClientOriginalExtension();
                    //path of image for upload
                    $org_path = 'images/originals/' . $filename;
                    $thm_path = 'images/thumbnails/' . $filename;
                    $newPhoto->enlace_imagen_evento = 'images/originals/'.$filename;
                    $newPhoto->thumbnail = 'images/thumbnails/'.$filename;
                    $newPhoto->tipo_imagen_evento = 'galeria';
                    $newPhoto->evento_id = $idEvento;
                    //don't upload file when unable to save name to database
                    if ( ! $newPhoto->save()) {
                        return false;
                    }
                    // upload image to server
                    if (($org_img && $thm_img) == true) {
        
                       Image::make($image)->fit(900, 500, function ($constraint) {
                               $constraint->upsize();
                           })->save($org_path);
                       Image::make($image)->fit(270, 160, function ($constraint) {
                           $constraint->upsize();
                       })->save($thm_path);
                    }
                }
            }
            return redirect('admin/gestionEvento');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function show(Eventos $eventos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento= Evento::where('id',$id)->first();
        $evento->fecha_inicio_evento= DateTime::createFromFormat('Y-m-d', $evento->fecha_inicio_evento)->format('d-m-Y');
        if($evento->fecha_termino_evento){$evento->fecha_termino_evento= DateTime::createFromFormat('Y-m-d', $evento->fecha_termino_evento)->format('d-m-Y');}
        return view('admin/editarEvento',['evento'=>$evento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $evento = Evento::where('id',$id)->first();

        $evento->titulo_evento=request('titulo_evento');
        $evento->direccion_evento=request('direccion_evento');
        $evento->entrada_evento=request('entrada_evento');

        if($evento->entrada_evento) { $evento->precio_evento=request('precio_evento'); }

        $evento->hashtag_evento=request('hashtag_evento');
        
        if(request('hora_inicio_evento')){$evento->hora_inicio_evento=date('h:i', strtotime(request('hora_inicio_evento')));}
        if(request('hora_termino_evento')){$evento->hora_termino_evento=date('h:i', strtotime(request('hora_termino_evento')));}

        $evento->fecha_inicio_evento=DateTime::createFromFormat('d/m/Y', request('fecha_inicio_evento'));

        if( $evento->fecha_inicio_evento && request('fecha_termino_evento')){
            $evento->fecha_termino_evento=DateTime::createFromFormat('d/m/Y', request('fecha_termino_evento')); 
        }

        $evento->descripcion_evento=ucfirst(mb_strtolower(request('descripcion_evento')));

        if($evento->update()){

            $idEvento = $id;
            
            if ($request->hasFile('enlace_imagen_evento')) {

                foreach($evento->imagenEventos as $image){
                    ImagenEvento::where('enlace_imagen_evento','=',$image->enlace_imagen_evento)->where('tipo_imagen_evento','=','portada')->delete();
                }

                $portada = $request->file('enlace_imagen_evento');
                $org_img = $thm_img = true;
                $newPhoto = new $this->photo;
                //get file name of image  and concatenate with 4 random integer for unique
                $filename = rand(1111,9999).time().'.'.$portada->getClientOriginalExtension();
                //path of image for upload
                $org_path = 'images/originals/' . $filename;
                $thm_path = 'images/thumbnails/' . $filename;
                $newPhoto->enlace_imagen_evento = 'images/originals/'.$filename;
                $newPhoto->thumbnail = 'images/thumbnails/'.$filename;
                $newPhoto->tipo_imagen_evento = 'portada';
                $newPhoto->evento_id = $idEvento;
                //don't upload file when unable to save name to database
                if ( ! $newPhoto->save()) {
                    return false;
                }
                // upload image to server
                if (($org_img && $thm_img) == true) {
                Image::make($portada)->fit(900, 500, function ($constraint) {
                        $constraint->upsize();
                    })->save($org_path);
                Image::make($portada)->fit(270, 160, function ($constraint) {
                    $constraint->upsize();
                    })->save($thm_path);
                }
            }

            //////////////////////////////////////////////////////////////////////////////////

            if ($request->hasFile('image')) {

                foreach($evento->imagenEventos as $image){
                    ImagenEvento::where('enlace_imagen_evento','=',$image->enlace_imagen_evento)->where('tipo_imagen_evento','=','galeria')->delete();
                }

                $images = $request->file('image');
                $org_img = $thm_img = true;
                // loop through each image to save and upload
                foreach($images as $key => $image) {
                    //create new instance of Photo class
                    $newPhoto = new $this->photo;
                    //get file name of image  and concatenate with 4 random integer for unique
                    $filename = rand(1111,9999).time().'.'.$image->getClientOriginalExtension();
                    //path of image for upload
                    $org_path = 'images/originals/' . $filename;
                    $thm_path = 'images/thumbnails/' . $filename;
                    $newPhoto->enlace_imagen_evento = 'images/originals/'.$filename;
                    $newPhoto->thumbnail = 'images/thumbnails/'.$filename;
                    $newPhoto->tipo_imagen_evento = 'galeria';
                    $newPhoto->evento_id = $idEvento;
                    //don't upload file when unable to save name to database
                    if ( ! $newPhoto->save()) {
                        return false;
                    }
                    // upload image to server
                    if (($org_img && $thm_img) == true) {
        
                       Image::make($image)->fit(900, 500, function ($constraint) {
                               $constraint->upsize();
                           })->save($org_path);
                       Image::make($image)->fit(270, 160, function ($constraint) {
                           $constraint->upsize();
                       })->save($thm_path);
                    }
                }
            }
            return redirect('admin/gestionEvento');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Evento::destroy($id);
        return redirect('admin/gestionEvento');
    }
}
