<?php

namespace App\Http\Controllers\VistasController;


use App\Http\Controllers\Controller;

class VistaController extends Controller
{
    public function index(){
        return view('index');
    }
    public function informacion(){
        return view('informacion');
    }

    public function contactos(){
        return view('contactos');
    }

    public function error404(){
        return view( 'error404');
    }
}
