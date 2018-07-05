@extends('admin.layaut.loyaut')


<?php
$enlace = mysqli_connect("localhost", "root", "123", "bdrefri");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>

<div class="container-fluid ">

    <div class="row ">

        <div class="col-md-12 ">
            <div align="center">
                <br>
                <h1><b>PEDIDOS</b></h1>


                <form action="{{route('registroPedido')}}">
                    <input class="btn btn-primary" type="submit" value="Nuevo">
                </form>


            </div>

            {{--FUNCIÓN BUSCAR--}}
            <form action="{{route('pedidos')}}" class="form-inline">
                <input type="text" name="usuario" class="form-control mr-sm-2" placeholder="Buscar aquí..."
                       aria-label="Search" required>
                <input type="submit" value="Buscar" class="btn btn-outline-primary">
            </form>
            <table class="table">

                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Fecha Entrega</th>
                    <th scope="col">Fecha Pedido</th>
                    <th scope="col">Dirección entrega</th>
                    <th scope="col">Hora entrega</th>
                    <th scope="col">Total</th>
                    <th scope="col">id Usuario</th>
                    <th scope="col">id Estado</th>
                    <th scope="col">id Producto</th>


                </tr>
                </thead>


                <tbody>

                <?php

                $sql = "SELECT id, fecha_entrega, fecha_pedido, direccion_entrega, hora_entrega, total_monto, id_usuario, id_estado, id_producto FROM pedidos";
                $result = mysqli_query($enlace, $sql);


                while ($mostrar = mysqli_fetch_array($result)){
                ?>
                <tr>

                    <td><?php echo $mostrar['id']?></td>
                    <td><?php echo $mostrar['fecha_entrega']?></td>
                    <td><?php echo $mostrar['fecha_pedido']?></td>
                    <td><?php echo $mostrar['direccion_entrega']?></td>
                    <td><?php echo $mostrar['hora_entrega']?></td>
                    <td><?php echo $mostrar['total_monto']?></td>
                    <td><?php echo $mostrar['id_usuario']?></td>
                    <td><?php echo $mostrar['id_estado']?></td>
                    <td><?php echo $mostrar['id_producto']?></td>
                    <td>
                        <a class="btn btn-primary" href="{{route('eliminarPedido',$mostrar['id'])}}">Eliminar</a>

                        <a class="btn btn-primary" href="{{route('editarPedido',$mostrar['id'])}}">Editar</a>


                </tr>
                <?php
                }
                ?>


                </tbody>


            </table>

        </div>


    </div>
</div>
