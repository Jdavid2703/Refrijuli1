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
      return view('admin.crearUsuario',compact('select'));
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
        return redirect()->route('usuarios');


    }


    public function show($id)
    {
        $usuario = Usuario::find($id);
        return view('admin.editarUsuario',compact('usuario'));
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
            'tipo_documentos_id'=>'required',
            'correo'=>'required',
            'usuario'=>'required',
            'password'=>'required',


        ]);
        $usuario = Usuario::find($id);
        $usuario->usuario = $request->input('nombre');
        $usuario->usuario = $request->input('apellido');
        $usuario->usuario = $request->input('numero');
        $usuario->usuario = $request->input('tipo_documentos_id');
        $usuario->usuario = $request->input('correo');
        $usuario->usuario = $request->input('usuario');
        $usuario->usuario = $request->input('password');

        $usuario->save();
        return redirect()->route('usuarios');
    }



    public function destroy($id)
    {

    }
}
