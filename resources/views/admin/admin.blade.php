@extends('admin.layaut.loyaut')
<nav class="navbar navbar-expand-sm bg-info navbar-info fixed-top">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item ">
                <h4><a id="home1" class="nav-link" href="{{route('usuarios')}}">Usuarios<span
                                class="sr-only">(current)</span> </a></h4>
            </li>
            <li class="nav-item">
                <h4><a id="informacion1" class="nav-link" href="{{route('roles')}}">Roles</a></h4>
            </li>
            <li class="nav-item">
                <h4><a id="contactos1" class="nav-link" href="{{route('tipoDocumentos')}}">Tipo de Documentos</a></h4>
            </li>
            <li class="nav-item">
                <a href=""></a>
            </li>
        </ul>

        </div>
    </div>
</div>
</nav>

<br><br><br><br>
<h1><b>Bienvenido</b></h1>
<br>
<h4>
    <p>
        Usted está en modo <b>Administrador</b>; puede agregar,editar y eliminar todas las opciones.
    </p>

</h4>

