<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Rol;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RolesController extends Controller
{

    public function index()
    {
        $rol = \App\Models\Rol::all();
        return view('admin.roles',compact('rol'));
    }

    public function create()
    {
        return view('admin.crearRol');
    }


    public function store(Request $request)
    {
        $credenciales = $this->validate($request,[
            'rol'=>'required',
            'descripcion'=>'required',

        ]);
        $rol = new Rol();
        $rol->rol = $request->input('rol');
        $rol->descripcion = $request->input('descripcion');
        $rol->save();
        return redirect()->route('roles');

    }


    public function show($id)
    {
        $rolid = Rol::find($id);
        return view('admin.editarRol',compact('rolid'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $credenciales = $this->validate($request,[
            'rol'=>'required',
            'descripcion'=>'required',

        ]);
        $rol = Rol::find($id);
        $rol->rol = $request->input('rol');
        $rol->descripcion = $request->input('descripcion');
        $rol->save();
        return redirect()->route('roles');
    }


    public function destroy($id)
    {
        $rol = Rol::find($id);
        $rol->delete();
        return redirect()->route('roles');
    }
}

