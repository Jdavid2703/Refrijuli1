<?php

namespace App\Http\Controllers\BackEnd;


use App\Models\Pedido;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistroPedidoController extends Controller
{

    public function index()
    {
        $select = \App\Models\Usuario::all();
        return view('admin.crearPedido',compact('select'));

        $select = \App\Models\Estado::all();
        return view('admin.crearPedido',compact('select'));
    }


    public function create()
    {
        return view('admin.crearPedido');
    }


    public function store(Request $request)
    {
        $credenciales = $this->validate($request,[
            'fecha_entrega'=>'required',
            'fecha_pedido'=>'required',
            'direccion_entrega'=>'required',
            'hora_entrega'=>'required',
            'total_monto'=>'required',
            'id_usuario'=>'required',
            'id_estado'=>'required',
            'id_producto'=>'required',


        ]);
        $pedido = new Pedido();
        $pedido->fecha_entrega = $request->input('fecha_entrega');
        $pedido->fecha_pedido = $request->input('fecha_pedido');
        $pedido->direccion_entrega = $request->input('direccion_entrega');
        $pedido->hora_entrega = $request->input('hora_entrega');
        $pedido->total_monto = $request->input('total_monto');
        $pedido->id_usuario = $request->input('id_usuario');
        $pedido->id_estado = $request->input('id_estado');
        $pedido->id_producto = $request->input('id_producto');
        $pedido->save();
        return redirect()->route('pedido');

    }


    public function show($id)
    {
        $pedido = Pedido::find($id);
        return view('admin.editarPedido',compact('pedido'));
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

    }
}
