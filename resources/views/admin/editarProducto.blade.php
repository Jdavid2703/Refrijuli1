@extends('admin.layaut.loyaut')
<div align="center">
    <h1><b>EDITAR PRODUCTO</b></h1>
    <br>
</div>
<form action="{{route('updateProducto',$productoid->id)}}" method="post">
    {{csrf_field()}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <fieldset class="form-group">
                    <label for="usuario"><b>Nombre</b></label>
                    <input type="text" class="form-control" value="{{$productoid->nombre}}" id="rol" name="rol">

                </fieldset>
                <fieldset class="form-group">
                    <label for="usuario"><b>Descripcion</b></label>
                    <input type="text" class="form-control" value="{{$productoid->descripcion}}" id="Descripcion" name="descripcion">

                </fieldset>
                <fieldset class="form-group">
                    <label for="usuario"><b>Precio</b></label>
                    <input type="text" class="form-control" value="{{$productoid->precio}}" id="Descripcion" name="descripcion">

                </fieldset>

                <div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>

</form>

