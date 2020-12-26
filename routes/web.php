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

Route::get('/', function () {
    return view('welcome');
});


//definimos un parametro opcional
// Route::get('/saludo/{name?}', function($name='invitado'){
//      return 'hola '.$name;
// });

//si queremos hacer que en el name valide que no se ingrese numeros
 Route::get('/saludo/{name?}', function($name='invitado'){
      return 'hola '.$name;
 })->where('name',"[A-Za-z]+");
  //esta expresion regular nos hace la validadcion que solo recibe letras mayusculas o minusculas