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
        $picture = [];
        $picture['name'] =  $this->random_string() . '.' . $request->file('imagen')->getClientOriginalExtension();
        $picture['image'] =  $picture['name'];
        $image = $_FILES['imagen']['tmp_name'];
        $picture['image1'] =base64_encode(file_get_contents($request->file('imagen')));
        $row=\App\picture::create($picture);
        return "Imagen creada exitosamente";
    }
    public function editar(Request $request,$id)
    {
        $img=\App\picture::find($id);
        $image = Image::make($img['image']);
        $image->resize($request['medidas']['alto'],$request['medidas']['ancho']);
     
        $picture = new picture();
        $picture->name = $img['name'].$img['id'];
        $picture->image = base64_encode(file_get_contents( $image ));
        $picture->save();
        return "Imagen modificada exitosamente";
    }


    function compartir($id){ 
        $img=\App\picture::find($id);
        /*switch($red){
            case 1://facebook
                return "Usted ha compartido la imagen :".$img['name']." en Facebook";
            break;
            case 2://instagram
                return "Usted ha compartido la imagen :".$img['name']." en Instagram";
            break;
            case 3://whatsapp
                return "Usted ha compartido la imagen :".$img['name']." en Whatsapp";
            break;
        }*/
        
        return view('pages.compartir',compact('img'));
    }
    public function imagen(){
        return view('pages.imagen');
    }
   
  
    public function index(){
        $images=\App\picture::all();
       
        return $images;
        //return view('pages.galeria',compact('images'));
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
