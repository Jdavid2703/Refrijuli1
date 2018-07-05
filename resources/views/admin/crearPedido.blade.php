@extends('admin.layaut.loyaut')

<form action="{{route('guardarPedido')}}" method="post">
    {{csrf_field()}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">

                <div class="form-group">
                    <label for="nombre"><b>Fecha entrega </b></label>
                    <input type="date" class="form-control" id="nombre" name="nombre" aria-describedby="txtNombre">
                </div>


                <div class="form-group">
                    <label for="apellido"><b>Fecha pedido</b></label>
                    <input type="date" class="form-control" id="apellido" name="apellido"
                           aria-describedby="emailHelp">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="numero"><b>Dirección entrega</b></label>
                    <input type="text" class="form-control" id="numero" name="numero"
                           aria-describedby="emailHelp">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="numero"><b>Hora entrega</b></label>
                    <input type="time" class="form-control" id="numero" name="numero"
                           aria-describedby="emailHelp">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="numero"><b>Total monto</b></label>
                    <input type="text" class="form-control" id="numero" name="numero"
                           aria-describedby="emailHelp">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleSelect1"><b>id Usuario</b></label>
                    <select class="form-control" id="exampleSelect1" name="id">
                        <option value="" selected disabled hidden>Seleccionar</option>
                        @foreach($select as $item)
                            <option value="{{$item->id}}">{{$item->id}}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleSelect1"><b> Estado</b></label>
                    <select class="form-control" id="exampleSelect1" name="nombre">
                        <option value="" selected disabled hidden>Seleccionar</option>
                        @foreach($select1 as $item)
                            <option value="{{$item->id}}">{{$item->nombre}}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleSelect1"><b> Producto</b></label>
                    <select class="form-control" id="exampleSelect1" name="nombre">
                        <option value="" selected disabled hidden>Seleccionar</option>
                        @foreach($select2 as $item)
                            <option value="{{$item->id}}">{{$item->nombre}}</option>
                        @endforeach
                    </select>
                </div>

            </div>


            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-primary">Cancelar</button>


        </div>
    </div>
</form>




