stock_min@extends('admin.layaut.loyaut')

<form action="{{route('updateInsumo',$insumoid->id)}}" method="post">
    {{csrf_field()}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <br><br>
                <h1><b>EDITAR INSUMO</b></h1>
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
                            <label for="nombre"><b>Nombre</b></label>
                            <input type="text" class="form-control" value="{{$insumoid->nombre}}" id="nombre" name="nombre"
                                   aria-describedby="txtNombre">
                        </div>

                    </div>
                    <div class="col-md-5">


                        <div class="form-group">
                            <label for="descripcion"><b>Descripcion</b></label>
                            <input type="date" class="form-control" value="{{$insumoid->fecha_pedido}}" id="apellido" name="descripcion"
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
                            <label for="cantidad"><b>Cantidad</b></label>
                            <input type="text" class="form-control" value="{{$insumoid->Descripcion}}" id="numero" name="cantidad"
                                   aria-describedby="emailHelp">

                        </div>

                    </div>
                    <div class="col-md-5">
                        <div class="form-group">

                            <label for="stock_min"><b>Stock Min</b></label>
                            <input type="time" class="form-control" value="{{$insumoid->stock_min}}" id="numero" name="stock_min"
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

                        {{--<div class="form-group">--}}
                        {{--<label for="exampleSelect1"><b>id Usuario</b></label>--}}
                        {{--<select class="form-control" id="exampleSelect1" name="id_usuario">--}}
                        {{--<option value="{{$pedidoid->id_usuario}}" selected disabled hidden>Seleccionar</option>--}}
                        {{--@foreach($select as $item)--}}
                        {{--<option value="{{$item->id}}">{{$item->id}}</option>--}}
                        {{--@endforeach--}}
                        {{--</select>--}}

                        {{--</div>--}}
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">

                            <label for="stock_max"><b>Stock Max</b></label>
                            <input type="text" class="form-control" value="{{$insumoid->stock_max}}" id="numero" name="stock_max"
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
                        <label for="precio_unitario"><b>Precio Unitari</b></label>
                        <input type="text" class="form-control" value="{{$insumoid->precio_unitario}}" id="numero" name="precio_unitario"
                               aria-describedby="emailHelp">
                    </div>


                    <div class="col-md-5">
                        <label for="disponibilidad"><b>Disponibilidad</b></label>
                        <input type="text" class="form-control" value="{{$insumoid->disponibilidad}}" id="numero" name="disponibilidad"
                               aria-describedby="emailHelp">
                    </div>

                    <div class="col-md-1">

                    </div>

                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
    <div class="text-center">
        <br><br>
        <button type="submit" class="btn btn-primary">Enviar</button> &ensp;
        <button type="reset" class="btn btn-primary">Cancelar</button>
    </div>
</form>