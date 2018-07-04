<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnidadController extends Controller
{
    public function index()
    {
        $unidad = \App\Models\Producto::all();
        return view('admin.unidad',compact('unidad'));
    }
}
