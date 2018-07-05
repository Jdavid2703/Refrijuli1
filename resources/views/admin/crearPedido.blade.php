@extends('admin.layaut.loyaut')

<form action="{{route('guardarPedido')}}" method="post">
    {{csrf_field()}}
    <div class="container-fluid">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <div>
                <div class="form-group">
                    <label for="nombre"><b>fecha_entrega </b></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="txtNombre">
                </div>
                <div class="form-group">
                    <label for="apellido"><b>fecha_pedido</b></label>
                    <input type="text" class="form-control" id="apellido" name="apellido" aria-describedby="emailHelp">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="numero"><b>direccion_entrega</b></label>
                            <input type="text" class="form-control" id="numero" name="numero"
                                   aria-describedby="emailHelp">

                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="numero"><b>hora_entrega</b></label>
                            <input type="text" class="form-control" id="numero" name="numero"
                                   aria-describedby="emailHelp">

                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="numero"><b>total_monto</b></label>
                            <input type="text" class="form-control" id="numero" name="numero"
                                   aria-describedby="emailHelp">

                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="numero"><b>id_usuario</b></label>
                            <input type="text" class="form-control" id="numero" name="numero"
                                   aria-describedby="emailHelp">

                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="numero"><b>id_estado</b></label>
                            <input type="text" class="form-control" id="numero" name="numero"
                                   aria-describedby="emailHelp">

                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="numero"><b>id_producto</b></label>
                        <input type="text" class="form-control" id="numero" name="numero"
                               aria-describedby="emailHelp">

                    </div>
                </div>

            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-primary">Cancelar</button>
        </div>
    </div>
    <div class="col-md-1">

    </div>
    </div>
</form>



