<?php

namespace App\Http\Controllers;

use App\Sitioturistico;
use App\Imagensitioturistico;
use Illuminate\Support\Facades\store;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use File;
use Image;
use Illuminate\Support\Facades\Auth;
use Session;
use Redirect;

class SitioturisticoController extends Controller
{
    protected $photo;
    public function __construct(
        Imagensitioturistico $photo )
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


        $sitios= Sitioturistico::paginate(6);

        return view('admin.vistaSitioAll')->with('sitios',$sitios);

    }

    public function MostrarSitio($sitio_id){
        $sitio = Sitioturistico::where('id',$sitio_id)->first();
        return view('sitio', ['sitio'=>$sitio]);
    }


    public function MostrarSitios(){
        $sitios= Sitioturistico::paginate(6);
        return view('sitios')->with('sitios',$sitios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.agregarSitioTuristico');

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

        $horario=request('d1').' a '.request('d2').' de '.request('h1').' hrs a '.request('h2').' hrs';
        $datoSitioTuristico= new Sitioturistico();

        $datoSitioTuristico->user_id = Auth::id();
        $datoSitioTuristico->nombre_turistico =  $request['nombre_turistico'];
        $datoSitioTuristico->tipo_turistico = $request['tipo_turistico'];
        $datoSitioTuristico->horario_turistico = $horario;
        $datoSitioTuristico->direccion_turistico = $request['direccion_turistico'];
        $datoSitioTuristico->descripcion_turistico = $request['descripcion_turistico'];
        $datoSitioTuristico->save();
        $nombre = $request['nombre_turistico'];

        $idSitio = DB::select( DB::raw("SELECT sitio_turisticos.id FROM sitio_turisticos WHERE sitio_turisticos.nombre_turistico = '$nombre'"));
        $idSitio2 = DB::table('sitio_turisticos')->where('nombre_turistico', $nombre)->value('id');
        $datoImagenSitio=request()->only('enlace_imagen_turistico'); 
 
        //----------------------------------------------------------------------------------------

        $request->validate([
            'enlace_imagen_turistico' => 'required',
            'enlace_imagen_turistico.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if ($request->hasFile('enlace_imagen_turistico')) {
            $logos = $request->file('enlace_imagen_turistico');
            $org_img = $thm_img = true;
            // loop through each image to save and upload
                //create new instance of Photo class
                $newPhoto = new $this->photo;
                //get file name of image  and concatenate with 4 random integer for unique
                $filename = rand(1111,9999).time().'.'.$logos->getClientOriginalExtension();
                //path of image for upload
                $org_path = 'images/originals/' . $filename;
                $thm_path = 'images/thumbnails/' . $filename;
                $newPhoto->enlace_imagen_turistico = 'images/originals/'.$filename;
                $newPhoto->thumbnail = 'images/thumbnails/'.$filename;
                $newPhoto->tipo_imagen_turistico = 'logo';
                $newPhoto->sitio_turistico_id = $idSitio2;
                //don't upload file when unable to save name to database
                if ( ! $newPhoto->save()) {
                    return false;
                }
                // upload image to server
                if (($org_img && $thm_img) == true) {
                   Image::make($logos)->fit(900, 500, function ($constraint) {
                           $constraint->upsize();
                       })->save($org_path);
                   Image::make($logos)->fit(270, 160, function ($constraint) {
                       $constraint->upsize();
                   })->save($thm_path);
                }
        }
        //----------------------------------------------------------------------------------------
        
        $request->validate([
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
 
        //check if image exist
        if ($request->hasFile('image')) {
            $images = $request->file('image');
 
            //setting flag for condition
            $org_img = $thm_img = true;
 
            // create new directory for uploading image if doesn't exist
            if( ! File::exists('images/originals/')) {
                $org_img = File::makeDirectory('images/originals/', 0777, true);
            }
            if ( ! File::exists('images/thumbnails/')) {
                $thm_img = File::makeDirectory('images/thumbnails', 0777, true);
            }
 
            // loop through each image to save and upload
            foreach($images as $key => $image) {
                //create new instance of Photo class
                $newPhoto = new $this->photo;
                //get file name of image  and concatenate with 4 random integer for unique
                $filename = rand(1111,9999).time().'.'.$image->getClientOriginalExtension();
                //path of image for upload
                $org_path = 'images/originals/' . $filename;
                $thm_path = 'images/thumbnails/' . $filename;
                $newPhoto->enlace_imagen_turistico = 'images/originals/'.$filename;
                $newPhoto->thumbnail = 'images/thumbnails/'.$filename;
                $newPhoto->tipo_imagen_turistico = 'galeria';
                $newPhoto->sitio_turistico_id = $idSitio2;

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
 
        $sitios='App\Sitioturistico'::with('imagenSitioTuristicos')->findOrFail($idSitio2);
        $msg = '¡Sitio agregado correctamente!';
        return Redirect::route('admin.index')->withSuccess($msg);
        //return view('admin.vistaSitio')->with('sitios',$sitios)->withSuccess($msg);        
    }
    
    public function mostrar($id)
    {
        //return$id;
        $sitios= Sitioturistico::where('id',$id)->get();
        return view('admin.vistaSitio',compact('sitios'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sitioturistico  $sitioturistico
     * @return \Illuminate\Http\Response
     */
    public function show(Sitioturistico $sitioturistico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sitioturistico  $sitioturistico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $sitio= Sitioturistico::where('id',$id)->first();

        return view('admin.edit',compact('sitio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sitioturistico  $sitioturistico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nombre = $request['nombre_turistico'];

        $idSitio2 = DB::table('sitio_turisticos')->where('nombre_turistico', $nombre)->value('id');

        //
        $horario=request('d1').' a '.request('d2').' de '.request('h1').' hrs a '.request('h2').' hrs';
        
        $datoSitioTuristico= Sitioturistico::find($id);

        //$datoSitioTuristico->user_id =  $request->get('user_id');
        $datoSitioTuristico->nombre_turistico = $request->get('nombre_turistico');
        $datoSitioTuristico->tipo_turistico =  $request->get('tipo_turistico');
        $datoSitioTuristico->horario_turistico = $horario;
        $datoSitioTuristico->direccion_turistico =  $request->get('direccion_turistico');
        $datoSitioTuristico->descripcion_turistico =  $request->get('descripcion_turistico');

        $datoSitioTuristico->save();
        //sitioturistico::where('id','=',$id)->update($datoSitioTuristico);

        $datoimagensitioturistico=request()->only(['enlace_imagen_turistico']);
        //return $datoimagensitioturistico;
        //


            $sitioturistico=Sitioturistico::with('imagensitioturistico')->findOrFail($id);
            
            if($request->hasFile('image')){
            foreach($sitioturistico->imagensitioturistico as $image) 
            {
                Imagensitioturistico::where('enlace_imagen_turistico','=',$image->enlace_imagen_turistico)->where('tipo_imagen_turistico','=','galeria')->delete();
            }}

            if($request->hasFile('enlace_imagen_turistico')){
            foreach($sitioturistico->imagensitioturistico as $image) 
            {
                Imagensitioturistico::where('enlace_imagen_turistico','=',$image->enlace_imagen_turistico)->where('tipo_imagen_turistico','=','logo')->delete();
            }}
        
            $request->validate([
                'enlace_imagen_turistico' => 'required',
                'enlace_imagen_turistico.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            if ($request->hasFile('enlace_imagen_turistico')) {
                $logos = $request->file('enlace_imagen_turistico');
                $org_img = $thm_img = true;
                // loop through each image to save and upload
                    //create new instance of Photo class
                    $newPhoto = new $this->photo;
                    //get file name of image  and concatenate with 4 random integer for unique
                    $filename = rand(1111,9999).time().'.'.$logos->getClientOriginalExtension();
                    //path of image for upload
                    $org_path = 'images/originals/' . $filename;
                    $thm_path = 'images/thumbnails/' . $filename;
                    $newPhoto->enlace_imagen_turistico = 'images/originals/'.$filename;
                    $newPhoto->thumbnail = 'images/thumbnails/'.$filename;
                    $newPhoto->tipo_imagen_turistico = 'logo';
                    $newPhoto->sitio_turistico_id = $idSitio2;
                    //don't upload file when unable to save name to database
                    if ( ! $newPhoto->save()) {
                        return false;
                    }
                    // upload image to server
                    if (($org_img && $thm_img) == true) {
                       Image::make($logos)->fit(900, 500, function ($constraint) {
                               $constraint->upsize();
                           })->save($org_path);
                       Image::make($logos)->fit(270, 160, function ($constraint) {
                           $constraint->upsize();
                       })->save($thm_path);
                    }
            }
            //----------------------------------------------------------------------------------------
            
            $request->validate([
                'image' => 'required',
                'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
     
            //check if image exist
            if ($request->hasFile('image')) {
                $images = $request->file('image');
     
                //setting flag for condition
                $org_img = $thm_img = true;
     
                // create new directory for uploading image if doesn't exist
                if( ! File::exists('images/originals/')) {
                    $org_img = File::makeDirectory('images/originals/', 0777, true);
                }
                if ( ! File::exists('images/thumbnails/')) {
                    $thm_img = File::makeDirectory('images/thumbnails', 0777, true);
                }
     
                // loop through each image to save and upload
                foreach($images as $key => $image) {
                    //create new instance of Photo class
                    $newPhoto = new $this->photo;
                    //get file name of image  and concatenate with 4 random integer for unique
                    $filename = rand(1111,9999).time().'.'.$image->getClientOriginalExtension();
                    //path of image for upload
                    $org_path = 'images/originals/' . $filename;
                    $thm_path = 'images/thumbnails/' . $filename;
                    $newPhoto->enlace_imagen_turistico = 'images/originals/'.$filename;
                    $newPhoto->thumbnail = 'images/thumbnails/'.$filename;
                    $newPhoto->tipo_imagen_turistico = 'galeria';
                    $newPhoto->sitio_turistico_id = $idSitio2;
    
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
        

        $sitioturistico=Sitioturistico::with('Imagensitioturistico')->findOrFail($id);

        return view('admin.editarSitioTuristico',compact('sitioturistico'));
        //return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sitioturistico  $sitioturistico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //debe tener el cod_turistico omo id
        $sitio = Sitioturistico::find($id);
        $sitio->delete();

        // redirect
        $msg = 'Sitio Eliminado correctamente.';
        return Redirect::to('admin')->withSuccess($msg);
    }
}
