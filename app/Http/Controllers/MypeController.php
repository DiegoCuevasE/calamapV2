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
use App\horario;
use App\Servicio;
use App\Idioma;
use App\User;

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

        if (Auth::user()->tipo_usuario == "0"){
            
            $mypes = Mype::all();
            return view('admin.gestionMype')->with('mypes',$mypes);
            
        }elseif(Auth::user()->tipo_usuario == "1"){
            
            $mypes = Mype::where('user_id','=',Auth::user()->id)->get();

            return view('admin.gestionMype')->with('mypes',$mypes);
        }
            //$users = User::all();
            //return view('admin.gestionMype')->with('users',$users);
            //return $users;

            //$mype = Mype::where('id',Auth::id())->first();
            //return view('admin/gestionMype', ['mype'=>$mype, 'mypes' => $mypes]);
    }

    public function updateStatus(Request $request)
    {
    //return $request;
    $mype = Mype::findOrFail($request->mype_id);
    $mype->estado_mype = $request->status;
    $mype->save();

    return response()->json(['message' => 'Mype status updated successfully.']);
    }

    public function llenarForm()
    {

        $servicios = Servicio::all();
        $idiomas = Idioma::all();
        $horarios = horario::all();
        $users = User::whereBetween('tipo_usuario',[0,1])
        ->get();
        
        //$mype = Mype::with('imagenmypes')->all();
        //$imagenes = $mype2->imagenmypes()->where('mype_id', '=', '1')->get();

        return view('admin/agregarMype',['servicios' => $servicios, 'idiomas' => $idiomas, 'users'=> $users, 'horarios' =>$horarios]);
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
        
        
        $validarDatos =[
            'nombre_fantasia_mype' => 'required|max:100',
            'direccion_mype' => 'required|max:100',
            'descripcion_mype' => 'required|max:1000',
            'enlace_imagen_mype' => 'required',
            'enlace_imagen_mype.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
            "image" => ["required","array","max:3"],
        ];

        

        switch (request('rubro_mype')) {
            case "Hotelería":
            $validar =$validarDatos+['servicioH' => 'required',];
                break;
            case "Gastronomía":
            $validar =$validarDatos+['servicioG' => 'required',];
                break;
            case "Turismo":
            $validar =$validarDatos+['servicioT' => 'required',];
                break;
            case "Artesanía":
            $validar =$validarDatos+['servicioA' => 'required',];
                break;
            case "Bazares":
            $validar =$validarDatos+['servicioB' => 'required',];
                break;
        }

        switch (request('idioma_mype')) {
            case "0":
            $validar =$validar+['idioma'=>'required',];
                break;
        }
        

        $mensaje=[
            "nombre_fantasia_mype.required"=>'El nombre de la MyPE es obligatorio',
            "direccion_mype.required"=>'La dirección de la MyPE es obligatoria',
            "descripcion_mype.required"=>'La descripción de la MyPE es obligatoria',
            "enlace_imagen_mype.required" => 'Si no posee un logo, ingrese una imagen de su MyPE',
            "image.required" => 'Debes adjuntar minimo 1 imagen de galeria',
            "image.max" => 'Debe adjuntar maximo 3 imagenes de su MyPE',
            "idioma.required" => 'Debes seleccionar un idioma al menos',
            "servicioT.required" => 'Debes seleccionar al menos un servicio',
            "servicioH.required" => 'Debes seleccionar al menos un servicio',
            "servicioA.required" => 'Debes seleccionar al menos un servicio',
            "servicioB.required" => 'Debes seleccionar al menos un servicio',
            "servicioG.required" => 'Debes seleccionar al menos un servicio',
        ];

        $this->validate($request,$validar,$mensaje);

        $datosmype = new Mype();

        $corte = substr($request['coordenadas'], 7);
        $coordenadas = explode(" ", $corte);
        $longitud = $coordenadas[0];
        $latitud = substr($coordenadas[1], 0, -1);
        

        $datosmype->titulo_mype=request('titulo_datosmype');
        $datosmype->direccion_mype=request('direccion_datosmype');
        $datosmype->entrada_mype=request('entrada_datosmype');
        $datosmype->user_id=request('user_id');

        $datosmype->rubro_mype=request('rubro_mype');
        $datosmype->nombre_fantasia_mype=request('nombre_fantasia_mype');
        $datosmype->razon_social_mype=request('razon_social_mype');
        $datosmype->direccion_mype=request('direccion_mype');
        $datosmype->descripcion_mype=ucfirst(mb_strtolower(request('descripcion_mype')));
        $datosmype->horario_mype= request('horario_mype');
        $datosmype->estado_mype='0';
        $datosmype->telefono_mype=request('telefono_mype');
        $datosmype->celular_mype=request('celular_mype');
        $datosmype->correo_mype=request('correo_mype');
        $datosmype->pagina_mype=request('pagina_mype');
        $datosmype->facebook_mype=request('facebook_mype');
        $datosmype->instagram_mype=request('instagram_mype');
        $datosmype->longitud_mype=$longitud;
        $datosmype->latitud_mype=$latitud;
        $datosmype->save();

    //-----------------------------------------------------------------------------

    $idSitio2 = DB::table('mypes')->where('nombre_fantasia_mype', $datosmype->nombre_fantasia_mype)->value('id');
    
    if ($datosmype->horario_mype== "Personalizado") {
    for ($i = 1; $i <= 7; $i++) {

        $datosmype->id = $idSitio2;
        $datosmype->horarios()->attach($i,[
        'hora_inicio'=> request($i.'I'),
        'hora_termino'=>request($i.'T'),
        'hora_inicio_dos'=> request($i.'II'),
        'hora_termino_dos'=>request($i.'TT'),
        ]);
        
    }}
    


    if ($datosmype->rubro_mype=request('idioma_mype') == "0") {
        $mype4 = new \App\Mype;
        $mype4->id = $idSitio2;
        $mype4->idiomas()->attach(request('idioma'));
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
    return redirect('admin/gestionMype');
        
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
        $horarios = horario::all();
        $servicios = Servicio::all();
        $idiomas = Idioma::all();
        $mypes= Mype::where('id',$id)->first();
        // return $mypes;
        return view('admin/editarMype',['servicios' => $servicios, 'idiomas' => $idiomas, 'mypes'=> $mypes, 'horarios'=>$horarios]);
        //$mype= Mype::where('id',$id)->first();

        //return view('admin/editarMype',compact('mype'));
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
       
        $validarDatos =[
            'nombre_fantasia_mype' => 'required|max:100',
            'direccion_mype' => 'required|max:100',
            'descripcion_mype' => 'required|max:1000',
            'enlace_imagen_mype.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ];

        switch (request('rubro_mype')) {
            case "Hotelería":
            $validar =$validarDatos+['servicioH' => 'required',];
                break;
            case "Gastronomía":
            $validar =$validarDatos+['servicioG' => 'required',];
                break;
            case "Turismo":
            $validar =$validarDatos+['servicioT' => 'required',];
                break;
            case "Artesanía":
            $validar =$validarDatos+['servicioA' => 'required',];
                break;
            case "Bazares":
            $validar =$validarDatos+['servicioB' => 'required',];
                break;
        }

        switch (request('idioma_mype')) {
            case "0":
            $validar =$validar+['idioma'=>'required',];
                break;
        }
        

        $mensaje=[
            "nombre_fantasia_mype.required"=>'El nombre de la MyPE es obligatorio',
            "direccion_mype.required"=>'La dirección de la MyPE es obligatoria',
            "descripcion_mype.required"=>'La descripción de la MyPE es obligatoria',
            "idioma.required" => 'Debe seleccionar un idioma al menos',
            "servicioT.required" => 'Debes seleccionar al menos un servicio',
            "servicioH.required" => 'Debes seleccionar al menos un servicio',
            "servicioA.required" => 'Debes seleccionar al menos un servicio',
            "servicioB.required" => 'Debes seleccionar al menos un servicio',
            "servicioG.required" => 'Debes seleccionar al menos un servicio',
        ];
        $this->validate($request,$validarDatos,$mensaje);

        //return $request;

        //$horario=request('d1').' a '.request('d2').' de '.request('h1').' hrs a '.request('h2').' hrs';

        $datosmype = Mype::find($id);

        $datosmype->user_id             =request('user_id');
        $datosmype->rubro_mype          =request('rubro_mype');
        $datosmype->nombre_fantasia_mype=request('nombre_fantasia_mype');
        $datosmype->razon_social_mype   =request('razon_social_mype');
        $datosmype->direccion_mype      =request('direccion_mype');
        $desc=ucfirst(mb_strtolower(request('descripcion_mype')));
        $datosmype->descripcion_mype    =$desc;
        $datosmype->horario_mype        =request('horario_mype');
        $datosmype->estado_mype         =request('estado_mype');
        $datosmype->telefono_mype       =request('telefono_mype');
        $datosmype->celular_mype        =request('celular_mype');
        $datosmype->correo_mype         =request('correo_mype');
        $datosmype->pagina_mype         =request('pagina_mype');
        $datosmype->facebook_mype       =request('facebook_mype');
        $datosmype->instagram_mype      =request('instagram_mype');
        //return$datosmype;
        $datosmype->update();
        $mype = Mype::findOrFail($id);

        if ($datosmype->horario_mype== "Personalizado") {

            for ($i = 1; $i <= 7; $i++) {
        
                $datosmype->horarios()->updateExistingPivot($i,[

                'hora_inicio'       => request($i.'I'),
                'hora_termino'      => request($i.'T'),
                'hora_inicio_dos'   => request($i.'II'),
                'hora_termino_dos'  => request($i.'TT'),

                ]);
                
            }
        }

        $idSitio2 = $id;

        //0 español y otros
        //1 solo español
    if ($datosmype->rubro_mype=request('idioma_mype') == "0") {
        $mype4 = new \App\Mype;
        $mype4->id = $idSitio2;
        $mype4->idiomas()->sync(request('idioma'));
    }elseif ($datosmype->rubro_mype=request('idioma_mype') == "1") {
        $mype4 = new \App\Mype;
        $mype4->id = $idSitio2;
        $mype4->idiomas()->sync([]);
    }

    if ($datosmype->rubro_mype=request('rubro_mype') == "Hotelería") {
        $mype4 = new \App\Mype;
        $mype4->id = $idSitio2;
        $mype4->servicios()->sync(request('servicioH'));
    }

    if ($datosmype->rubro_mype=request('rubro_mype') == "Gastronomía") {
        $mype4 = new \App\Mype;
        $mype4->id = $idSitio2;
        $mype4->servicios()->sync(request('servicioG'));
    }

    if ($datosmype->rubro_mype=request('rubro_mype') == "Turismo") {
        $mype4 = new \App\Mype;
        $mype4->id = $idSitio2;
        $mype4->servicios()->sync(request('servicioT'));
    }

    if ($datosmype->rubro_mype=request('rubro_mype') == "Bazares") {
        $mype4 = new \App\Mype;
        $mype4->id = $idSitio2;
        $mype4->servicios()->sync(request('servicioB'));
    }

    if ($datosmype->rubro_mype=request('rubro_mype') == "Artesanía") {
        $mype4 = new \App\Mype;
        $mype4->id = $idSitio2;
        $mype4->servicios()->sync(request('servicioA'));
    }

    $request->validate([
        
        'enlace_imagen_mype.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);



    if ($request->hasFile('enlace_imagen_mype')) {
        foreach($datosmype->imagenMypes as $image){
            Imagenmype::where('enlace_imagen_mype','=',$image->enlace_imagen_mype)->where('tipo_imagen_mype','=','logo')->delete();
        }

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
        
        'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);

    //check if image exist
    if ($request->hasFile('image')) {
        foreach($datosmype->imagenMypes as $image){
            Imagenmype::where('enlace_imagen_mype','=',$image->enlace_imagen_mype)->where('tipo_imagen_mype','=','galeria')->delete();
        }
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
    return redirect('admin/gestionMype');
    // return redirect('moduloMype');
    
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
        return redirect('admin/home');
    }

    public function getMype(){
        $mypes = DB::table('mypes')->where('user_id',Auth::id())->take(1)->get();;

        return view('adminMype/vistaMypes', ['mypes' => $mypes]);
    }
}
