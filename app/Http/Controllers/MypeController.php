<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Visita;
use Illuminate\Support\Facades\Auth;
use App\Mype;
use DB;
use File;
use Image;
use App\Imagenmype;

use Illuminate\Support\Facades\store;

use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Servicio;
use App\Idioma;

class MypeController extends Controller
{

    protected $photo;
    public function __construct(
        imagenmype $photo )
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

        $mype = Mype::find(1);
        
        //$mype = Mype::with('imagenmypes')->all();
        //$imagenes = $mype2->imagenmypes()->where('mype_id', '=', '1')->get();

        
        return view('adminMype/vistaMypes',['datos' => $mype]);
    }


    public function llenarForm()
    {

        $servicios = Servicio::all();
        $idiomas = Idioma::all();
        
        //$mype = Mype::with('imagenmypes')->all();
        //$imagenes = $mype2->imagenmypes()->where('mype_id', '=', '1')->get();

        
        return view('adminMype/registroMype',['servicios' => $servicios, 'idiomas' => $idiomas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminMype/registroMype');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horario=request('d1').' a '.request('d2').' de '.request('h1').' hrs a '.request('h2').' hrs';
        
        $datosmype = new Mype();
        $datosmype->user_id=Auth::id();
        $datosmype->rubro_mype=request('rubro_mype');

        $datosmype->nombre_fantasia_mype=request('nombre_fantasia_mype');
        $datosmype->razon_social_mype=request('razon_social_mype');
        $datosmype->direccion_mype=request('direccion_mype');
        $datosmype->descripcion_mype=request('descripcion_mype');
        $datosmype->horario_mype= $horario;
        $datosmype->estado_mype=request('estado_mype');
        $datosmype->telefono_mype=request('telefono_mype');
        $datosmype->celular_mype=request('celular_mype');
        $datosmype->correo_mype=request('correo_mype');
        $datosmype->pagina_mype=request('pagina_mype');
        $datosmype->facebook_mype=request('facebook_mype');
        $datosmype->instagram_mype=request('instagram_mype');
        $datosmype->save();

    //-----------------------------------------------------------------------------
    $nombre = $request['razon_social_mype'];

    $idSitio2 = DB::table('mypes')->where('razon_social_mype', $nombre)->value('id');


    if ($datosmype->rubro_mype=request('idioma_mype') == "0") {
        $mype4 = new \App\Mype;
        $mype4->id = $idSitio2;
        $mype4->idiomas()->attach(request('idioma'));
    }elseif ($datosmype->rubro_mype=request('idioma_mype') == "1") {
        $mype4 = new \App\Mype;
        $mype4->id = $idSitio2;
        $mype4->idiomas()->attach("1");
    }


    if ($datosmype->rubro_mype=request('rubro_mype') == "Hotelería") {
        $mype4 = new \App\Mype;
        $mype4->id = $idSitio2;
        $mype4->servicios()->attach(request('servicioH'));
    }

  

    if ($datosmype->rubro_mype=request('rubro_mype') == "Gastronomía") {
        $mype4 = new \App\Mype;
        $mype4->id = $idSitio2;
        $mype4->servicios()->attach(request('servicioG'));
    }

    if ($datosmype->rubro_mype=request('rubro_mype') == "Turismo") {
        $mype4 = new \App\Mype;
        $mype4->id = $idSitio2;
        $mype4->servicios()->attach(request('servicioT'));
    }

    if ($datosmype->rubro_mype=request('rubro_mype') == "Bazares") {
        $mype4 = new \App\Mype;
        $mype4->id = $idSitio2;
        $mype4->servicios()->attach(request('servicioB'));
    }

    if ($datosmype->rubro_mype=request('rubro_mype') == "Artesanía") {
        $mype4 = new \App\Mype;
        $mype4->id = $idSitio2;
        $mype4->servicios()->attach(request('servicioA'));
    }

    $request->validate([
        'enlace_imagen_mype' => 'required',
        'enlace_imagen_mype.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);
    if ($request->hasFile('enlace_imagen_mype')) {
        $logos = $request->file('enlace_imagen_mype');
        $org_img = $thm_img = true;
        if( ! File::exists('images/originals/')) {
            $org_img = File::makeDirectory('images/originals/', 0777, true);
        }
        if ( ! File::exists('images/thumbnails/')) {
            $thm_img = File::makeDirectory('images/thumbnails', 0777, true);
        }
        // loop through each image to save and upload
            //create new instance of Photo class
            $newPhoto = new $this->photo;
            //get file name of image  and concatenate with 4 random integer for unique
            $filename = rand(1111,9999).time().'.'.$logos->getClientOriginalExtension();
            //path of image for upload
            $org_path = 'images/originals/' . $filename;
            $thm_path = 'images/thumbnails/' . $filename;
            $newPhoto->enlace_imagen_mype = 'images/originals/'.$filename;
            $newPhoto->thumbnail = 'images/thumbnails/'.$filename;
            $newPhoto->tipo_imagen_mype = 'logo';
            $newPhoto->mype_id = $idSitio2;
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
            $newPhoto->enlace_imagen_mype = 'images/originals/'.$filename;
            $newPhoto->thumbnail = 'images/thumbnails/'.$filename;
            $newPhoto->tipo_imagen_mype = 'galeria';
            $newPhoto->mype_id = $idSitio2;

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
        return redirect('adminMype/historico');
        
    }
    public function getIdiomas(Request $request){
        
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\mype  $mype
     * @return \Illuminate\Http\Response
     */
    public function show(Mype $mype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mype  $mype
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return dd($id);
        $mype = Mype::findOrFail($id);
        return view('adminMype.editarMype', compact('mype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mype  $mype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $horario=request('d1').' a '.request('d2').' de '.request('h1').' hrs a '.request('h2').' hrs';

        $datosmype = new Mype();
        $datosmype->user_id=request('user_id');
        $datosmype->nombre_fantasia_mype=request('nombre_fantasia_mype');
        $datosmype->razon_social_mype=request('razon_social_mype');
        $datosmype->direccion_mype=request('direccion_mype');
        $datosmype->descripcion_mype=request('descripcion_mype');
        $datosmype->horario_mype= $horario;
        $datosmype->estado_mype=request('estado_mype');
        $datosmype->telefono_mype=request('telefono_mype');
        $datosmype->celular_mype=request('celular_mype');
        $datosmype->correo_mype=request('correo_mype');
        $datosmype->pagina_mype=request('pagina_mype');
        $datosmype->facebook_mype=request('facebook_mype');
        $datosmype->instagram_mype=request('instagram_mype');
        $datosmype->otra_redS_mype=request('otra_redS_mype');
        //return$datosmype;
        $datosmype->update();
        $mype = Mype::findOrFail($id);
        //return view('moduloMype.editarMype', compact('mype'));
        return redirect('moduloMype');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mype  $mype
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Mype::destroy($id);
        return redirect('moduloMype');
    }

    public function getMype(){
        $mypes = DB::table('mypes')->where('user_id',Auth::id())->take(1)->get();;

        return view('adminMype/vistaMypes', ['mypes' => $mypes]);
    }
}
