<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function formulario($datos){
        //Contadores con la posibles respuestas
        //if por separado y cuando entre se aumenta el contador
        //If anidados con las posibles convinaciones y dentro un return view
    }
}
