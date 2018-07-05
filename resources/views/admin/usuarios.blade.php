@extends('admin.layaut.loyaut')


<?php
$enlace = mysqli_connect("localhost", "root", "123", "bdrefri");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>

<div class="container-fluid ">

    <div class="row">
        <div class="col-md-2">

        </div>


        <div class="col-md-8 ">
            <div align="center">
                <h1><b>USUARIOS</b></h1>


                <form action="{{route('registro')}}">
                    <input class="btn btn-primary" type="submit" value="Nuevo">
                </form>


            </div>
            <br>
            <table class="table">

                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">DOCUMENTO</th>
                    <th scope="col">CORREO</th>
                    <th scope="col">USUARIO</th>
                    <th scope="col">ID ROL</th>



                </tr>
                </thead>


                <tbody>

                <?php

                $sql = "SELECT id, nombre, apellido, numero, correo, usuario, rols_id FROM usuarios";
                $result = mysqli_query($enlace, $sql);


                while ($mostrar = mysqli_fetch_array($result)){
                ?>
                <tr>

                    <td><?php echo $mostrar['id']?></td>
                    <td><?php echo $mostrar['nombre']?></td>
                    <td><?php echo $mostrar['apellido']?></td>
                    <td><?php echo $mostrar['numero']?></td>
                    <td><?php echo $mostrar['correo']?></td>
                    <td><?php echo $mostrar['usuario']?></td>
                    <td><?php echo $mostrar['rols_id']?></td>
                    <td>
                        <a class="btn btn-primary" href="{{route('eliminarUsuario',$mostrar['id'])}}">Eliminar</a>

                        <a class="btn btn-primary"href="{{route('ediUsuario',$mostrar['id'])}}">Editar</a>


                </tr>
                <?php
                }
                ?>


                </tbody>


            </table>

        </div>

        <div class="col-md-2  ">


        </div>
    </div>
</div>





