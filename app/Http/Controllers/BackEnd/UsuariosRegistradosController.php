<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuariosRegistradosController extends Controller
{

    public function index()
    {
        $usuario = \App\Models\Usuario::all();
        return view('admin.usuarios',compact('usuario'));
    }

    public function create()
    {
        return view('admin.crearUsuario');
    }


    public function store(Request $request)
    {
        $credenciales = $this->validate($request,[
            'nombre'=>'required',
            'apellido'=>'required',
            'numero'=>'required',
            'correo'=>'required',
            'usuario'=>'required',
            'password'=>'required',
            'tipo_documento_id'=>'required',


        ]);
        $usuario = new Usuario();
        $usuario->nombre = $request->input('nombre');
        $usuario->apellido = $request->input('apellido');
        $usuario->numero = $request->input('numero');
        $usuario->correo = $request->input('correo');
        $usuario->usuario = $request->input('usuario');
        $usuario->tipo_documento_id = $request->input('tipo_documento_id');
        $usuario->save();
        return redirect()->route('usuarios');
    }


    public function show($id)
    {
        {
            $usuarioid = Usuario::find($id);
            return view('admin.editarUsuario',compact('usuarioid'));
        }
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $credenciales = $this->validate($request,[
            'nombre'=>'required',
            'apellido'=>'required',
            'numero'=>'required',
            'correo'=>'required',
            'usuario'=>'required',
            'password'=>'required',
            'tipo_documento_id'=>'required',


        ]);
        $usuario = new Usuario();
        $usuario->nombre = $request->input('nombre');
        $usuario->apellido = $request->input('apellido');
        $usuario->numero = $request->input('numero');
        $usuario->correo = $request->input('correo');
        $usuario->usuario = $request->input('usuario');
        $usuario->tipo_documento_id = $request->input('tipo_documento_id');
        $usuario->save();
        return redirect()->route('usuarios');
    }


    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect()->route('usuarios');
    }
}
