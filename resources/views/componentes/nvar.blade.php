<br><br><br>
<div align="center">
    <img src="img/logo.png" width="260" height="180">

</div>

<nav class="navbar navbar-expand-sm bg-info navbar-info fixed-top">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

            <li class="nav-item ">
                <h4><b><a id="home1" class="nav-link {{request()->is('/')?'active':''}} "
                          href="{{route('/')}}">Inicio<span
                                    class="sr-only">(current)</span> </a></b></h4>
            </li>

            <li class="nav-item">
                <h4><b><a id="informacion1" class="nav-link {{request()->is('nosotros')?'active':''}} "
                          href="{{route('informacion')}}">Información</a></b></h4>
            </li>
            <li class="nav-item">
                <h4><b><a id="contactos1" class="nav-link {{request()->is('contactos')?'active':''}}"
                          href="{{route('contactos')}}">Contactos</a></b></h4>
            </li>

            <li class="nav-item">
                <a href=""></a>
            </li>
        </ul>

        <!-- Boton Modal -->
        <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#loginModal">
            Iniciar Sesión
        </button>
    </div>
</nav>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Iniciar Sesión</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                @section('modal')
                    @include('componentes.form')
                    <br><br>
                @show

            </div>
        </div>
    </div>
</div>

