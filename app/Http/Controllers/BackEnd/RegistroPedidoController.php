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
        $select1 = \App\Models\Estado::all();
        $select2 = \App\Models\Producto::all();
        return view('admin.crearPedido', compact('select', 'select1', 'select2'));

    }


    public function create()
    {
        return view('admin.crearPedido');
    }


    public function store(Request $request)
    {
        $credenciales = $this->validate($request, [
            'fecha_entrega' => 'required',
            'fecha_pedido' => 'required',
            'direccion_entrega' => 'required',
            'hora_entrega' => 'required',
            'total_monto' => 'required',
            'id_usuario' => 'required',
            'id_estado' => 'required',
            'id_producto' => 'required',


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
        return redirect()->route('pedidos');

    }


    public function show($id)

    {
        $pedidoid = Pedido::find($id);
        return view('admin.editarPedido', compact('pedidoid'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $credenciales = $this->validate($request, [
            'fecha_entrega' => 'required',
            'fecha_pedido' => 'required',
            'direccion_entrega' => 'required',
            'hora_entrega' => 'required',
            'total_monto' => 'required',
            'id_usuario' => 'required',
            'id_estado' => 'required',
            'id_producto' => 'required',



        ]);
        $pedido = Pedido::find($id);
        $pedido->fecha_entrega = $request->input('fecha_entrega');
        $pedido->fecha_pedido = $request->input('fecha_pedido');
        $pedido->direccion_entrega = $request->input('direccion_entrega');
        $pedido->hora_entrega = $request->input('hora_entrega');
        $pedido->total_monto = $request->input('total_monto');
        $pedido->id_usuario = $request->input('id_usuario');
        $pedido->id_estado = $request->input('id_estado');
        $pedido->id_producto = $request->input('id_producto');
        $pedido->save();
        return redirect()->route('pedidos');
    }


    public function destroy($id)
    {

        $pedido = Pedido::find($id);
        $pedido->delete();
        return redirect()->route('pedidos');
    }
}
