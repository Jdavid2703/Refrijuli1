<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<form action="{{route('update',$rolid->id)}}" method="post">
    {{csrf_field()}}

    <fieldset class="form-group">
        <label for="usuario">Rol</label>
        <input type="text" class="form-control" value="{{$rolid->rol}}" id="rol" name="rol">

    </fieldset>
    <fieldset class="form-group">
        <label for="usuario">Descripcion</label>
        <input type="text" class="form-control" value="{{$rolid->descripcion}}" id="Descripcion" name="descripcion">

    </fieldset>

    <div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
</form>

