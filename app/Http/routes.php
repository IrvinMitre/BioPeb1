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

Route::get('/home', 'HomeController@index')->middleware('auth');
//--------------------------------------------------
//Ruta del perfil
Route::get('/perfil', function(){
return view('Perfil/perfil');
})->middleware('auth');

//--------------------------------------------------
//Ruta del cuestionario
Route::get('/cuestionario', function(){
return view('Actividades/Cuestionario/cuestionario');
})->middleware('auth');
//ruta de una imagen que lanza el cuestionario
Route::get('/1', function(){
return view('Actividades/Cuestionario/Respuestas/1');
})->middleware('auth');
//--------------------------------------------------
//Ruta de lecturas
Route::get('/lecturas', function(){
return view('Lecturas/lecturas');
})->middleware('auth');
//--------------------------------------------------
//Ruta de actividades
Route::get('/actividades', function(){
return view('Actividades/actividades');
})->middleware('auth');
//--------------------------------------------------
//Ruta del foro
Route::get('/foro', function(){
return view('Foro/foro');
})->middleware('auth');

//--------------------------------------------------
//--------------------------------------------------
//Ruta del foro
Route::get('/multimedia', function(){
return view('Multimedia/multimedia');
})->middleware('auth');

//--------------------------------------------------
//Ruta del contacto
Route::get('/contacto', function(){
return view('Contacto/contacto');
})->middleware('auth');

//--------------------------------------------------
//Ruta de las preguntas
Route::get('/preguntas', function(){
return view('Preguntas/preguntas');
})->middleware('auth');

//--------------------------------------------------
//Ruta para el crucigrama
Route::get('/crucigrama', function(){
return view('Actividades/Crusigrama/crusigrama');
})->middleware('auth');
//--------------------------------------------------
//Ruta para el crucigrama
Route::get('/acerca-de', function(){
return view('Acerca/acerca');
})->middleware('auth');
//--------------------------------------------------
//Ruta para acerca de nosotros
Route::get('/acerca-de', function(){
return view('Acerca/acerca');
})->middleware('auth');
//--------------------------------------------------
//Ruta para avisos
Route::get('/avisos', function(){
return view('Avisos/avisos');
})->middleware('auth');
//Route::get