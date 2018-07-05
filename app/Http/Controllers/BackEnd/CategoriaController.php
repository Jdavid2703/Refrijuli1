<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Categoria;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{

    public function index()
    {
        $categoria = \App\Models\Categoria::all();
        return view('admin.categoria',compact('categoria'));
    }


    public function create()
    {
        return view('admin.crearCategoria');
    }


    public function store(Request $request)
    {
        $credenciales = $this->validate($request,[
            'nombre'=>'required',
            'descripcion'=>'required',

        ]);
        $categoria = new Categoria();
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        $categoria->save();
        return redirect()->route('categoria');
    }


    public function show($id)
    {
        $categoriaid = Categoria::find($id);
        return view('admin.editarCategoria',compact('categoriaid'));
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
        $categoria = Categoria::find($id);
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        $categoria->save();
        return redirect()->route('categoria');
    }

    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect()->route('categoria');
    }
}
