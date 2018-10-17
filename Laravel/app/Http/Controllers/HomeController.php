<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Llamamos el modelo foto
use App\Photo;
// llamamos Auth el cual sera de autenticacion
use Auth;

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
        // Ejecutamos una consulta donde nos dice que user_id debe ser igual al id user
        // por que estos tienen una relación
        $photos = Photo::where('user_id','=', Auth::user()->id)->get();
        return view('home')->with('photos',$photos);
    }
}
