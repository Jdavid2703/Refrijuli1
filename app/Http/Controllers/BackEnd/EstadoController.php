<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Estado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstadoController extends Controller
{
    public function index()
    {
        $estado = \App\Models\Estado::all();
        return view('admin.estado',compact('estado'));
    }

    public function create()
    {
        return view('admin.crearEstado');
    }

    public function store(Request $request)
    {
        $credenciales = $this->validate($request,[
            'nombre'=>'required',
            'descripcion'=>'required',

        ]);
        $estado = new Estado();
        $estado->nombre = $request->input('nombre');
        $estado->descripcion = $request->input('descripcion');
        $estado->save();
        return redirect()->route('estado');
    }

    public function show($id)
    {
        $estadoid = Estado::find($id);
        return view('admin.editarEstado',compact('estadoid'));
    }

    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
        $credenciales = $this->validate($request,[
            'nombre'=>'required',
            'descripcion'=>'required',

        ]);
        $estado = Estado::find($id);
        $estado->nombre = $request->input('nombre');
        $estado->descripcion = $request->input('descripcion');
        $estado->save();
        return redirect()->route('estado');
    }

    public function destroy($id)
    {
        $estado = Estado::find($id);
        $estado->delete();
        return redirect()->route('estado');
    }



}
