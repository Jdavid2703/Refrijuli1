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

    <div class="row">
        <div class="col-md-1">

        </div>


        <div class="col-md-10 ">
            <div align="center">
                <h1><b>INSUMO</b></h1>


                <form action="{{route('registroInsumo')}}">
                    <input class="btn btn-primary" type="submit" value="Nuevo">
                </form>


            </div>
            <br>
            <table class="table">

                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">CANTIDAD</th>
                    <th scope="col">ID CATEGORIA</th>
                    <th scope="col">STOCK MINIMO</th>
                    <th scope="col">STOCK MAXIMO</th>
                    <th scope="col">ID PRESENTACION</th>
                    <th scope="col">ID UNIDAD</th>
                    <th scope="col">PRECIO UNITARIO</th>
                    <th scope="col">DISPONIBILIDAD</th>



                </tr>
                </thead>


                <tbody>

                <?php

                $sql = "SELECT * FROM insumos";
                $result = mysqli_query($enlace, $sql);


                while ($mostrar = mysqli_fetch_array($result)){
                ?>
                <tr>

                    <td><?php echo $mostrar['id']?></td>
                    <td><?php echo $mostrar['nombre']?></td>
                    <td><?php echo $mostrar['descripcion']?></td>
                    <td><?php echo $mostrar['cantidad']?></td>
                    <td><?php echo $mostrar['id_categoria']?></td>
                    <td><?php echo $mostrar['stock_min']?></td>
                    <td><?php echo $mostrar['stock_max']?></td>
                    <td><?php echo $mostrar['id_presentacion']?></td>
                    <td><?php echo $mostrar['id_unidad']?></td>
                    <td><?php echo $mostrar['precio_unitario']?></td>
                    <td><?php echo $mostrar['disponibilidad']?></td>



                    <td>
                        <a class="btn btn-primary" href="#">Eliminar</a>

                        <a class="btn btn-primary" href="#">Editar</a>
                    </td>

                </tr>
                <?php
                }
                ?>


                </tbody>


            </table>

        </div>

        <div class="col-md-1  ">


        </div>
    </div>
</div>
