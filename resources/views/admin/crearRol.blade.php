@extends('admin.layaut.loyaut')
<div align="center">
    <h1><b>REGISTRAR ROL</b></h1>
    <br>
</div>
<form action="{{route('guardarRol')}}" method="post">
    {{csrf_field()}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <fieldset class="form-group">
                    <label for="usuario">Rol</label>
                    <input type="text" class="form-control" id="rol" name="rol">

                </fieldset>
                <fieldset class="form-group">
                    <label for="usuario">Descripcion</label>
                    <input type="text" class="form-control" id="Descripcion" name="descripcion">

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

