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
        <div class="col-md-2  ">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <table class="table">

                <thead class="thead-dark">
                <tr align="center">
                  <h3 align="center"><b>ROLES</b></h3>
                </tr>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">DESCRIPCIÓN</th>

                </tr>
                </thead>


                <tbody>

            <?php

            $sql = "SELECT id,descripcion FROM rols ";
            $result = mysqli_query($enlace, $sql);


            while ($mostrar = mysqli_fetch_array($result)){
            ?>
            <tr>

                <td><?php echo $mostrar['id']?></td>
                <td><?php echo $mostrar['descripcion']?></td>



            </tr>
            <?php
            }
            ?>
                </tbody>
            </table>
        </div>


        <div class="col-md-8 ">
            <div align="center">
                <h1><b>USUARIOS</b> </h1>


                    <form action="">

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
                    <th scope="col">ACCIONES</th>


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
                    <td ><?php echo $mostrar['nombre']?></td>
                    <td><?php echo $mostrar['apellido']?></td>
                    <td><?php echo $mostrar['numero']?></td>
                    <td><?php echo $mostrar['correo']?></td>
                    <td><?php echo $mostrar['usuario']?></td>
                    <td><?php echo $mostrar['rols_id']?></td>
                    <td><button type="button" class="btn btn-primary">Eliminar</button>
                        <button type="button" class="btn btn-primary">Editar</button></td>



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




