<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use App\picture;
class edicionC extends Controller
{
    public function store(Request $request)
    {
        $picture=[];
        $picture['name'] =  $this->random_string() ;
        $image = $_FILES['imagen']['tmp_name'];
        $picture['image'] =base64_encode(file_get_contents($request->file('imagen')));
        $row=\App\picture::create($picture);
        return "Imagen creada exitosamente";
    }
    public function editar(Request $request,$id)
    {
        $img=\App\picture::find($id);
        $imagen= base64_decode($img['image']);
        $imagen->resizeWidth = $request['medidas']['ancho'];
        $imagen->resizeHeight = $request['medidas']['alto'];
        $picture = new picture();
        $picture->name = $img['name'].$img['id'];
        $picture->image = base64_encode(file_get_contents( $imagen ));
        $picture->save();
        return "Imagen modificada exitosamente";
    }


    function compartir($id){ 
        $img=\App\picture::find($id);
        
        
        return view('pages.compartir',compact('img'));
    }
    public function imagen(){
        return view('pages.imagen');
    }
   
  
    public function index(){
        $images=\App\picture::all();
       
        return $images;
      
    }

    
    public function editarVista($idImagen)
    {
        $img= \App\picture::find($idImagen);
        return  $img;

       // return view('pages.edicion',compact('img'));

    }
    protected function random_string()
{
    $key = '';
    $keys = array_merge( range('a','z'), range(0,9) );

    for($i=0; $i<10; $i++)
    {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}
}
