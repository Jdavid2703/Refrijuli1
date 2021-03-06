@extends('admin.layaut.loyaut')
<br>
<div align="center">
<h1><b>REGISTRAR USUARIO</b></h1>
    <br>
</div>
<form action="{{route('guardarUsuario')}}" method="post">
    {{csrf_field()}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label for="nombre"><b>Nombre</b></label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="txtNombre">
            </div>
            <div class="form-group">
                <label for="apellido"><b>Apellido</b></label>
                <input type="text" class="form-control" id="apellido" name="apellido" aria-describedby="emailHelp">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="numero"><b>Número documento</b></label>
                        <input type="text" class="form-control" id="numero" name="numero" aria-describedby="emailHelp">

                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleSelect1"><b>Tipo de Documento</b></label>
                        <select class="form-control" id="exampleSelect1" name="tipo_documentos_id">
                            <option value="" selected disabled hidden>Seleccionar</option>
                            @foreach($select as $item)
                                <option value="{{$item->id}}">{{$item->nombre}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
            </div>


            <div class="form-group">
                <label for="correo"><b>Correo</b></label>
                <input type="text" class="form-control" id="correo" name="correo" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="usuario"><b>Usuario</b></label>
                <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="password"><b>Contraseña</b></label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-primary">Cancelar</button>
        </div>

        <div class="col-md-3">

        </div>
    </div>
    </div>
</form>
</div>

</div>





