@extends('admin.layaut.loyaut')
<div align="center">
    <h1><b>EDITAR ESTADO</b></h1>
    <br>
</div>
<form action="{{route('updateEstado',$estadoid->id)}}" method="post">
    {{csrf_field()}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <fieldset class="form-group">
                    <label for="usuario">Nombre</label>
                    <input type="text" class="form-control"  value="{{$estadoid->nombre}}" id="nombre" name="nombre">

                </fieldset>
                <fieldset class="form-group">
                    <label for="usuario">Descripción</label>
                    <input type="text" class="form-control" value="{{$estadoid->descripcion}}" id="Descripcion2" name="descripcion">

                </fieldset>

                <div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>

</form>

