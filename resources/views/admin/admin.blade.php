@extends('admin.layaut.loyaut')
<br><br><br>
<div align="center">
    <img src="img/logo.png" width="260" height="180">

</div>

{{--MENÚ DE NAVEGACIÓN--}}
<nav class="navbar navbar-expand-sm bg-info navbar-info fixed-top">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item ">
                <h4><b><a id="home1" class="nav-link" href="{{route('usuarios')}}">Usuarios<span
                                    class="sr-only">(current)</span> </a></b></h4>
            </li>
            <li class="nav-item">
                <h4><b><a id="informacion1" class="nav-link" href="{{route('roles')}}">Roles</a></b></h4>
            </li>
            <li class="nav-item">
                <h4><b><a id="contactos1" class="nav-link" href="{{route('tipoDocumentos')}}">Tipo de Documentos</a></b>
                </h4>
            </li>
            <li class="nav-item">
                <a href=""></a>
            </li>
        </ul>

        {{--MODAL CERRAR SESIÓN--}}
        <li class="nav-item">
            <a class="nav-item" data-toggle="modal" data-target="#exampleModal1"><b>Cerrar sesión</b></a>
        </li>


    </div>
    </div>
    </div>
</nav>

<br><br><br><br>

{{--TEXTO DE BIENVENIDA--}}

<h4>
    <p>
        Usted está en modo <b>Administrador</b>; puede agregar,editar y eliminar todas las opciones.
    </p>

</h4>

 {{--LOGOOUT MODAL--}}
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Está seguro?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Al presionar cerrar sesión, se cerrará su cuenta</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="#">Cerrar sesión</a>
            </div>
        </div>
    </div>
</div>


