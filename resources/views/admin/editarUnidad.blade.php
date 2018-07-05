@extends('admin.layaut.loyaut')
<div align="center">
    <h1><b>EDITAR UNIDAD</b></h1>
    <br>
</div>
<form action="{{route('updateUnidad',$unidadid->id)}}" method="post">
    {{csrf_field()}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <fieldset class="form-group">
                    <label for="usuario">Tipo Unidad</label>
                    <input type="text" class="form-control"  value="{{$unidadid->tipo_unidad}}" id="nombre" name="nombre">

                </fieldset>
                <fieldset class="form-group">
                    <label for="usuario">Cantidad</label>
                    <input type="text" class="form-control" value="{{$unidadid->cantidad}}" id="Descripcion2" name="descripcion">

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

