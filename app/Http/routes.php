<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

//Ruta para el perfil
Route::get('/perfil', function(){
return view('Perfil/perfil');
});
//Ruta para la parte de lecturas
Route::get('/lecturas', function(){
return view('Lecturas/lecturas');
});
//Route::get
//Ruta para la para el primercuestionario
Route::get('/cuestionario1', function(){
return view('Actividades/cuestionario1');
});