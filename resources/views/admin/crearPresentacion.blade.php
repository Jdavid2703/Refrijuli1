@extends('admin.layaut.loyaut')
<div align="center">
    <h1><b>REGISTRAR PRESENTACIÓN</b></h1>
    <br>
</div>
<form action="{{route('guardarPresentacion')}}" method="post">
    {{csrf_field()}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <fieldset class="form-group">
                    <label for="usuario">Descripción</label>
                    <input type="text" class="form-control" id="Descripcion2" name="descripcion">

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

