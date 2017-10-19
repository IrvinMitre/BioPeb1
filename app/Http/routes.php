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
//Falta la ruta para enviar lo del perfil
Route::get('/perfil', function(){
return view('Perfil/perfil');
});

Route::get('/cuestionario', function(){
return view('Actividades/Cuestionario/cuestionario');
});
//Route::get