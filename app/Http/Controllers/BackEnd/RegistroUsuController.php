<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistroUsuController extends Controller
{

    public function index()
    {
        $select = \App\Models\TipoDocumento::all();
        return view('registro',compact('select'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $credenciales = $this->validate($request,[
            'nombre'=>'required',
            'apellido'=>'required',
            'numero'=>'required|numeric',
            'tipo_documentos_id'=>'required',
            'correo'=>'required|email|unique:usuarios,correo',
            'usuario'=>'required|unique:usuarios,usuario',
            'password'=>'required'
        ]);
        $Usuarios = new Usuario();
        $Usuarios->nombre = $request->input('nombre');
        $Usuarios->apellido = $request->input('apellido');
        $Usuarios->numero = $request->input('numero');
        $Usuarios->tipo_documentos_id = $request->input('tipo_documentos_id');
        $Usuarios->correo = $request->input('correo');
        $Usuarios->usuario = $request->input('usuario');
        $Usuarios->password =  bcrypt($request->input('password'));
        $Usuarios->remember_token = str_random(10);
        $Usuarios->save();

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
