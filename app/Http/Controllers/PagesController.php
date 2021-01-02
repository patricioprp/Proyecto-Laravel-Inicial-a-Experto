<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{
    public function home(){
        //return response('este es el contenido',201,['X-TOKEN' => 'SECRET']); otra forma de pasar header
        return response('este es el contenido',201)->header('Content-Type', 'text/plain')
        ->header('X-Header-One', 'Header Value')
        ->header('X-Header-Two', 'Header Value')
        ->cookie('X-COOKIE', 'cookie');
    }

    public function contact(){
        return view('contacto');
    }

    public function mensajes(CreateMessageRequest $request){
            
        $data = $request->all();//devuelvo un array
        //return redirect()
        //->route('contacto')
       // ->with('info','Tu mensaje fue enviado con exito :)');//se almacena en variables de session info
       return back()->with('info','Tu mensaje fue enviado con exito :)');
    }

    public function saludo($name='name'){

        $html = "<h1>Contenido en html</h1>";//simula el valor ingresado por el usuario en un formulario
        $script = "<script>alert('Problema XXS-Cross Site Scripting')</script>";
   
        $consolas = [
            'Play Station',
            'Xbox one',
            'Wii U'
        ];
         return view('saludo',compact('name','html','script','consolas'));
    }
}
