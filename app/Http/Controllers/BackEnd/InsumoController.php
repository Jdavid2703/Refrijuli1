<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InsumoController extends Controller
{
    public function index()
    {
        $insumo = \App\Models\Insumo::all();
        return view('admin.insumo',compact('insumo'));
    }
}
