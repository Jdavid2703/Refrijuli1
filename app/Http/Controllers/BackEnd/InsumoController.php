<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Insumo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controlle;

class InsumoController extends Controller
{
    public function index()
    {
        $insumo = Insumo::all();
        return view('admin.insumo',compact('insumo'));
    }


    public function create()
    {
        return view('admin.crearInsumo');
    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {


    }


    public function destroy($id)
    {

    }
}