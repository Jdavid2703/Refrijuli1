<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductoController extends Controller
{
    public function index()
    {
        $producto = \App\Models\Producto::all();
        return view('admin.producto',compact('producto'));
    }


    public function create()
    {
        return view('admin.crearProducto');
    }


    public function store(Request $request)
    {
        $credenciales = $this->validate($request,[
            'nombre'=>'required',
            'descripcion'=>'required',
            'precio'=>'required|numeric',

        ]);
        $producto = new Producto();
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->save();
        return redirect()->route('producto');
    }


    public function show($id)
    {
        $productoid = Producto::find($id);
        return view('admin.editarProducto',compact('productoid'));
    }

    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
        $credenciales = $this->validate($request,[
            'nombre'=>'required',
            'descripcion'=>'required',
            'precio'=>'required|numeric',

        ]);
        $producto = Producto::find($id);
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->save();
        return redirect()->route('producto');
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route('producto');
    }
}
