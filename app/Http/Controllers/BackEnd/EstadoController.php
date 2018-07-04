<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstadoController extends Controller
{
    public function index()
    {
        $estado = \App\Models\Estado::all();
        return view('admin.estado',compact('estado'));
    }
}
