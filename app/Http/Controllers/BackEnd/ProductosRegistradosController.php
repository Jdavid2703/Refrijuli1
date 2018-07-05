<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductosRegistradosController extends Controller
{

    public function index()
    {
        $producto = \App\Models\Usuario::all();
        return view('admin.producto',compact('producto'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $productoid= Producto::find($id);
        return view('admin.editarProducto',compact('productoid'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $credenciales = $this->validate($request,[
            'nombre'=>'required',
            'descripcion'=>'required',
            'precio'=>'required',
            'estado'=>'required',




        ]);
        $producto = Producto::find($id);
        $producto ->nombre = $request->input('nombre');
        $producto ->descripcion = $request->input('descripcion');
        $producto ->precio = $request->input('precio');
        $producto ->estado = $request->input('estado');
        $producto ->save();
        return redirect()->route('producto');
    }


    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route('producto');
    }
}
