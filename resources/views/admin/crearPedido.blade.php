@extends('admin.layaut.loyaut')

<form action="{{route('guardarPedido')}}" method="post">
    {{csrf_field()}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <br><br>
                <h1><b>REGISTRAR PEDIDO</b></h1>
                <br><br>

            </div>
        </div>
        <div class="row ">
            <div class="col-md-3">

            </div>
            <div class="col-md-6 ">
                <div class="row ">

                    <div class="col-md-1">

                    </div>
                    <div class="col-md-5">


                        <div class="form-group">
                            <label for="fecha_entrega"><b>Fecha entrega </b></label>
                            <input type="date" class="form-control" id="nombre" name="fecha_entrega"
                                   aria-describedby="txtNombre">
                        </div>

                    </div>
                    <div class="col-md-5">


                        <div class="form-group">
                            <label for="fecha_pedido"><b>Fecha pedido</b></label>
                            <input type="date" class="form-control" id="apellido" name="fecha_pedido"
                                   aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-md-1">

                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-5">

                        <div class="form-group">
                            <label for="direccion_entrega"><b>Dirección entrega</b></label>
                            <input type="text" class="form-control" id="numero" name="direccion_entrega"
                                   aria-describedby="emailHelp">

                        </div>

                    </div>
                    <div class="col-md-5">
                        <div class="form-group">

                            <label for="hora_entrega"><b>Hora entrega</b></label>
                            <input type="time" class="form-control" id="numero" name="hora_entrega"
                                   aria-describedby="emailHelp">

                        </div>
                    </div>

                    <div class="col-md-1">

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-5">

                        <div class="form-group">
                            <label for="exampleSelect1"><b>id Usuario</b></label>
                            <select class="form-control" id="exampleSelect1" name="id_usuario">
                                <option value="" selected disabled hidden>Seleccionar</option>
                                @foreach($select as $item)
                                    <option value="{{$item->id}}">{{$item->id}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">

                            <label for="total_monto"><b>Total monto</b></label>
                            <input type="text" class="form-control" id="numero" name="total_monto"
                                   aria-describedby="emailHelp">

                        </div>
                    </div>
                    <div class="col-md-1">

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-1">

                    </div>

                    <div class="col-md-5">
                        <div class="form-group">

                            <label for="exampleSelect1"><b> Estado</b></label>
                            <select class="form-control" id="exampleSelect1" name="id_estado">
                                <option value="" selected disabled hidden>Seleccionar</option>
                                @foreach($select1 as $item)
                                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>


                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="exampleSelect1"><b> Producto</b></label>
                            <select class="form-control" id="exampleSelect1" name="id_producto">
                                <option value="" selected disabled hidden>Seleccionar</option>
                                @foreach($select2 as $item)
                                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-1">

                    </div>

                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4 text-center">


                <div class="form-group">
                    <label for="exampleSelect1"><b> Insumo </b></label>
                    <select class="form-control" id="exampleSelect1" name="id_insumo">
                        <option value="" selected disabled hidden>Seleccionar</option>
                        @foreach($select3 as $item)
                            <option value="{{$item->id}}">{{$item->nombre}}</option>
                        @endforeach
                    </select>
                </div>


            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
    <div class="text-center">
        <br><br>
        <button type="submit" class="btn btn-primary">Enviar</button> &ensp;
        <button type="reset" class="btn btn-primary">Cancelar</button>
    </div>
</form>




