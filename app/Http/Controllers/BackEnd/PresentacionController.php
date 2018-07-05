<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Presentacion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PresentacionController extends Controller
{

    public function index()
    {
        $presentacion = \App\Models\Presentacion::all();
        return view('admin.presentacion',compact('presentacion'));
    }


    public function create()
    {
        return view('admin.crearPresentacion');
    }


    public function store(Request $request)
    {
        $credenciales = $this->validate($request,[
            'descripcion'=>'required',

        ]);
        $presentacion = new Categoria();
        $presentacion->descripcion = $request->input('descripcion');
        $presentacion->save();
        return redirect()->route('presentacion');
    }


    public function show($id)
    {
        $presentacionid = Presentacion::find($id);
        return view('admin.editarPresentacion',compact('presentacionid'));
    }

    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
        $credenciales = $this->validate($request,[

            'descripcion'=>'required',

        ]);
        $presentacion = Presentacion::find($id);
        $presentacion->descripcion = $request->input('descripcion');
        $presentacion->save();
        return redirect()->route('presentacion');
    }

    public function destroy($id)
    {
        $presentacion = Presentacion::find($id);
        $presentacion->delete();
        return redirect()->route('presentacion');
    }
}
