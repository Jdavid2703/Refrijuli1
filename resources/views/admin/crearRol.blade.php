@extends('admin.layaut.loyaut')

<form action="{{route('guardarRol')}}" method="post">
    {{csrf_field()}}

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
</form>

