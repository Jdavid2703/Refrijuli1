<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Unidad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnidadController extends Controller
{
    public function index()
    {
        $unidad = \App\Models\Unidad::all();
        return view('admin.unidad',compact('unidad'));
    }


    public function create()
    {
        return view('admin.crearUnidad');
    }


    public function store(Request $request)
    {
        $credenciales = $this->validate($request,[
            'tipo_unidad'=>'required',
            'cantidad'=>'required|numeric',

        ]);
        $unidad = new Categoria();
        $unidad->tipo_unidad = $request->input('tipo_unidad');
        $unidad->cantidad = $request->input('cantidad');
        $unidad->save();
        return redirect()->route('unidad');
    }


    public function show($id)
    {
        $unidadid = Unidad::find($id);
        return view('admin.editarUnidad',compact('unidadid'));
    }

    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
        $credenciales = $this->validate($request,[
            'tipo_unidad'=>'required',
            'cantidad'=>'required',

        ]);
        $unidad = Unidad::find($id);
        $unidad->tipo_unidad = $request->input('tipo_unidad');
        $unidad->cantidad = $request->input('cantidad');
        $unidad->save();
        return redirect()->route('unidad');
    }

    public function destroy($id)
    {
        $unidad = Unidad::find($id);
        $unidad->delete();
        return redirect()->route('unidad');
    }
}
