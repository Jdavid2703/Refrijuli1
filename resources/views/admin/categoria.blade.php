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

    <div class="row ">
        <div class="col-md-3  ">

        </div>

        <div class="col-md-5 ">
            <div align="center">

                <h1><b>CATEGORIAS</b></h1>

                <form action="{{route('crearCategoria')}}">

                    <input class="btn btn-primary" type="submit" value="Nuevo">
                </form>

            </div>
            <br>
            <table class="table">

                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">DESCRIPCIÓN</th>
                    <th scope="col">ACCIONES</th>

                </tr>
                </thead>


                <tbody>


                <?php

                $sql = "SELECT * FROM categorias";
                $result = mysqli_query($enlace, $sql);


                while ($mostrar = mysqli_fetch_array($result)){
                ?>
                <tr>

                    <td><?php echo $mostrar['id']?></td>
                    <td><?php echo $mostrar['nombre']?></td>
                    <td><?php echo $mostrar['descripcion']?></td>
                    <td>
                        <a class="btn btn-primary" href="{{route('eliminarCategoria',$mostrar['id'])}}">Eliminar</a>

                        <a class="btn btn-primary" href="{{route('editarCategoria',$mostrar['id'])}}">Editar</a>

                    </td>


                </tr>
                <?php
                }
                ?>


                </tbody>


            </table>

        </div>

        <div class="col-md-3  ">


        </div>

    </div>
</div>

