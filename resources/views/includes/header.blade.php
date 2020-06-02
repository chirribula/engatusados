<header class="text-center bg-warning">
    <h1 id="cabecera"> ENGATUSADOS <i class="fas fa-cat"></i></h1>

    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link text-warning" href="{{action('GatoController@index')}}"><i class="fas fa-cat"></i>&nbsp; Inicio</a>
          </li>
      <!--    <li class="nav-item">
            <a class="nav-link" href="{{action('GatoController@mostrarPerdidos')}}">Perdidos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{action('GatoController@mostrarEncontrados')}}">Encontrados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{action('GatoController@mostrarAdopcion')}}">Adopción</a>
          </li>
        -->
          <li class="nav-item">
            <a class="nav-link" href="{{action('GatoController@verGatos')}}">Gatos</a>
          </li>

        </ul>

        <ul class="navbar-nav navbar-right">
            <li class="nav-item">
                @if(Route::has('login'))
                    @auth
                        <a class="nav-link text-warning" href="{{action('UserController@verUsuario', ['id' => auth()->user()->id])}}"> {{auth()->user()->usuario }}</a>         <!--muestra el nombre de usuario si no está logueado-->
                @else
                        <a href="{{ route('login') }}"  style="display:inline">

                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Loguearse
                            </button>
                        </a>
                    @endauth
                @endif
            </li>
            <li class="nav-item">
                <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                        Cerrar Sesión
                    </button>
                </form>
            </li>
        </ul>
      </nav>
</header>
