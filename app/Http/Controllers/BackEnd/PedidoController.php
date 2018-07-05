<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Pedido;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PedidoController extends Controller
{

    public function index()
    {
        $pedido = Pedido::all();
        return view('admin.pedidos',compact('pedido'));
    }


    public function create()
    {
        return view('admin.crearPedido');
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
