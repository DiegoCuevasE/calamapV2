<?php

namespace App\Http\Controllers;
use File;
use Image;
use App\Foto;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    protected $foto;
 
    /**
     * [__construct description]
     * @param Foto $photo [description]
     */
    public function __construct(
        Foto $foto )
    {
        $this->foto = $foto;
    }


    public function index(){
        $fotos = Foto::all();
        return view('subirimagen', compact('fotos'));
    }


    public function uploadImage(Request $request)
    {
        $request->validate([
            'imagen' => 'required',
            'imagen.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
 
        //check if image exist
        if ($request->hasFile('imagen')) {
            $imagenes = $request->file('imagen');
 
            //setting flag for condition
            $org_img = $thm_img = true;
 
            // create new directory for uploading image if doesn't exist
            if( ! File::exists('imagenes/originals/')) {
                $org_img = File::makeDirectory('imagenes/originals/', 0777, true);
            }
            if ( ! File::exists('imagenes/thumbnails/')) {
                $thm_img = File::makeDirectory('imagenes/thumbnails', 0777, true);
            }
 
            // loop through each image to save and upload
            foreach($imagenes as $key => $imagen) {
                //create new instance of Photo class
                $newFoto = new $this->foto;
                //get file name of image  and concatenate with 4 random integer for unique
                $filename = rand(1111,9999).time().'.'.$imagen->getClientOriginalExtension();
                //path of image for upload
                $org_path = 'imagenes/originals/' . $filename;
                $thm_path = 'imagenes/thumbnails/' . $filename;
 
                $newFoto->imagen     = 'imagenes/originals/'.$filename;
                $newFoto->thumbnail = 'imagenes/thumbnails/'.$filename;
 
                //don't upload file when unable to save name to database
                if ( ! $newFoto->save()) {
                    return false;
                }
 
                // upload image to server
                if (($org_img && $thm_img) == true) {
                   Image::make($imagen)->fit(900, 500, function ($constraint) {
                           $constraint->upsize();
                       })->save($org_path);
                   Image::make($imagen)->fit(270, 160, function ($constraint) {
                       $constraint->upsize();
                   })->save($thm_path);
                }
            }
        }
 
    return redirect()->action('FotoController@index');
 
    }


}
