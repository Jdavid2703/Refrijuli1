<?php

namespace App\Http\Controllers\BackEnd;


use App\Models\Insumo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class RegistroInsumoController extends Controller
{
    public function index()
    {

        $select = \App\Models\Categori::all();
        return view('admin.crearInsumo', compact('select'));

    }


    public function create()
    {
        return view('admin.crearInsumo');
    }


    public function store(Request $request)
    {
        $credenciales = $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'stock_min' => 'required',
            'stock_max' => 'required',
            'precio_unitario' => 'required',
            'disponibilidad' => 'required',
            'id_categoria' => 'required',


        ]);
        $insumo = new Insumo();
        $insumo->nombre = $request->input('nombre');
        $insumo->descripcion = $request->input('descripcion');
        $insumo->cantidad = $request->input('cantidad');
        $insumo->stock_min = $request->input('stock_min');
        $insumo->stock_max = $request->input('stock_max');
        $insumo->precio_unitario = $request->input('precio_unitario');
        $insumo->disponibilidad = $request->input('disponibilidad');
        $insumo->id_categoria = $request->input('id_categoria');
        $insumo->save();
        return redirect()->route('insumo');

    }


    public function show($id)

    {
        $insumoid = Insumo::find($id);
        return view('admin.editarInsumo', compact('insumoid'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $credenciales = $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'stock_min' => 'required',
            'stock_max' => 'required',
            'precio_unitario' => 'required',
            'disponibilidad' => 'required',





        ]);
        $insumo = Insumo::find($id);
        $insumo->nombre = $request->input('nombre');
        $insumo->descripcion = $request->input('descripcion');
        $insumo->cantidad = $request->input('cantidad');
        $insumo->stock_min = $request->input('stock_min');
        $insumo->stock_max = $request->input('stock_max');
        $insumo->precio_unitario = $request->input('precio_unitario');
        $insumo->disponibilidad = $request->input('disponibilidad');

        $insumo->save();
        return redirect()->route('insumo');
    }


    public function destroy($id)
    {

        $insumo = Insumo::find($id);
        $insumo->delete();
        return redirect()->route('insumo');
    }
}
