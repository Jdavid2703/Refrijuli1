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
                <h4><b><a id="users" class="nav-link" href="{{route('usuarios')}}">Usuarios<span
                                    class="sr-only">(current)</span> </a></b></h4>
            </li>
            <li class="nav-item">
                <h4><b><a id="roless" class="nav-link" href="{{route('roles')}}">Roles</a></b></h4>
            </li>
            {{--<li class="nav-item">--}}
                {{--<h4><b><a id="tipD" class="nav-link" href="{{route('tipoDocumentos')}}">Tipo de Documentos</a></b>--}}
                {{--</h4>--}}
            {{--</li>--}}

            <li class="nav-item">
                <h4><b><a id="categori" class="nav-link" href="{{route('categoria')}}">Categorias</a></b>
                </h4>
            </li>

            <li class= "nav-item">
                <h4><b><a id="producto" class="nav-link" href="{{route('producto')}}">Productos</a></b>
                </h4>
            </li>

            <li class="nav-item">
                <h4><b><a id="categori" class="nav-link" href="#">Pedidos</a></b>
                </h4>
            </li>

            <li class="nav-item">
                <h4><b><a id="categori" class="nav-link" href="{{route('estado')}}">Estado</a></b>
                </h4>
            </li>

            <li class="nav-item">
                <h4><b><a id="categori" class="nav-link" href="#">Unidades</a></b>
                </h4>
            </li>


        </ul>

        {{--MODAL CERRAR SESIÓN--}}

        <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#exampleModal1">
            Cerrar Sesión
        </button>



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
                <h5 class="modal-title" id="exampleModal1">¿Está seguro?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Al presionar cerrar sesión, se cerrará su cuenta</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="{{route('cerrarSesion')}}">Cerrar sesión</a>
            </div>
        </div>
    </div>
</div>


