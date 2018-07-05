@extends('admin.layaut.loyaut')

<div align="center">
    <h1><b>EDITAR ROL</b></h1>
    <br>
</div>
<form action="{{route('update',$rolid->id)}}" method="post">
    {{csrf_field()}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">

                <fieldset class="form-group">
                    <label for="usuario"><b>Rol</b></label>
                    <input type="text" class="form-control" value="{{$rolid->rol}}" id="rol" name="rol">

                </fieldset>
                <fieldset class="form-group">
                    <label for="usuario"><b>Descripcion</b></label>
                    <input type="text" class="form-control" value="{{$rolid->descripcion}}" id="Descripcion"
                           name="descripcion">

                </fieldset>

                <div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </div>
        <div class="col-md-3">

        </div>
    </div>
</form>

