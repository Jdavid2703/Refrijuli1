<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistroProductoController extends Controller
{

    public function index()
    {
        $select = \App\Models\Estado::all();
        return view('admin.crearProducto',compact('select'));
    }

    public function store(Request $request)
    {
        $credenciales = $this->validate($request,[
            'nombre'=>'required',
            'descripción'=>'required',
            'precio'=>'required|numeric',
            'estado'=>'required',

        ]);

        $productos = new Producto();
        $productos->nombre = $request->input('nombre');
        $productos->descripción = $request->input('descripción');
        $productos->precio = $request->input('precio');
        $productos->estado = $request->input('estado');
        $productos->save();
        return redirect()->route('producto');

    }
}
