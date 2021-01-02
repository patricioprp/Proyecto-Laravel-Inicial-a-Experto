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

Route::get('/', ['as' => 'home' ,'uses' => 'PagesController@home']);

Route::get('contactanos',['as'=>'contacto', 'uses' => 'PagesController@contact']);

Route::post('contacto', 'PagesController@mensajes');

 Route::get('/saludo/{name?}', ['as' => 'saludo','uses' => 'PagesController@saludo'])->where('name',"[A-Za-z]+");
 