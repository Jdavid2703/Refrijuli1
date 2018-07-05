@extends('admin.layaut.loyaut')

<form action="{{route('updateUsuario',$usuarioid->id)}}" method="post">
    {{csrf_field()}}
    <div class="container-fluid"></div>
    <div class="form-group">
        <label for="nombre"><b>Nombre</b></label>
        <input type="text" class="form-control" value="{{$usuarioid->nombre}}" id="nombre" name="nombre" aria-describedby="txtNombre">
    </div>
    <div class="form-group">
        <label for="apellido"><b>Apellido</b></label>
        <input type="text" class="form-control" value="{{$usuarioid->apellido}}" id="apellido" name="apellido" aria-describedby="emailHelp">
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="numero"><b>Número documento</b></label>
                <input type="text" class="form-control" value="{{$usuarioid->numero}}"id="numero" name="numero" aria-describedby="emailHelp">

            </div>
        </div>
        {{--<div class="col">--}}
            {{--<div class="form-group">--}}
                {{--<label for="exampleSelect1"><b>Tipo de Documento</b></label>--}}
                {{--<select  class="form-control" value="{{$usuarioid->tipo_documento_id}}" id="exampleSelect1" name="tipo_documentos_id">--}}
                    {{--<option value="" selected disabled hidden>Seleccionar</option>--}}
                    {{--@foreach($select as $item)--}}
                        {{--<option value="{{$item->id}}">{{$item->nombre}}</option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}
            {{--</div>--}}

        {{--</div>--}}

        <div class="col">
            <div class="form-group">
                <label for="rol"><b>Rol ID</b></label>
                <input type="text" class="form-control" value="{{$usuarioid->rols_id}}"id="rolsid" name="rols_id" aria-describedby="emailHelp">

            </div>
        </div>

    </div>


    <div class="form-group">
        <label for="correo"><b>Correo</b></label>
        <input type="text" class="form-control" value="{{$usuarioid->correo}}"id="correo" name="correo" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="usuario"><b>Usuario</b></label>
        <input type="text" class="form-control" value="{{$usuarioid->usuario}}" id="usuario" name="usuario" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="password"><b>Contraseña</b></label>
        <input type="password" class="form-control" value="" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    <button type="reset" class="btn btn-primary">Cancelar</button>

</form>
</div>

</div>

