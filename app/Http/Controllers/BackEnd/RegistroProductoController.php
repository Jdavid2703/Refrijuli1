<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistroProductoController extends Controller
{

    public function index()
    {
        $producto = \App\Models\Producto::all();
        return view('admin.producto',compact('producto'));
    }

    public function create()
    {

    }
}
