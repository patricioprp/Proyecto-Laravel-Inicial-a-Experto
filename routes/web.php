<?php

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

Route::get('/', ['as' => 'home' ,function () {
    return view('home');
}]);

Route::get('contactanos',['as'=>'contacto',function(){
    return 'Seccion de contactos';
}]);

 Route::get('/saludo/{name?}', ['as' => 'saludo',function($name='invitado'){
     $html = "<h1>Contenido en html</h1>";//simula el valor ingresado por el usuario en un formulario
     $script = "<script>alert('Problema XXS-Cross Site Scripting')</script>";
      return view('saludo',compact('name','html','script'));
 }])->where('name',"[A-Za-z]+");
 