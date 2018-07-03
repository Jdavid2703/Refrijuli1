<form action="{{route('login')}}" method="post">
    {{csrf_field()}}
    <fieldset class="form-group">
        <label for="usuario">Usuario</label>
        <input type="text" class="form-control" id="usuario" name="usuario">

    </fieldset>
    <fieldset class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password">
        {{$errors->first('password','<span class="help-block>:message</span>"')}}
    </fieldset>
    <div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </div>
</form>

