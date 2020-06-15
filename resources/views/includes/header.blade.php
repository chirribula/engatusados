<header class="text-center bg-warning">
  <h1 id="cabecera"> ENGATUSADOS <i class="fas fa-cat"></i></h1>

  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <a class="navbar-brand " href="#"> <i class="fas fa-cat"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item Home">
            <a class="nav-link text-warning" href="{{action('GatoController@index')}}">Inicio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{action('GatoController@verGatos')}}">Gatos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{action('ProductoController@verProductos')}}">Tienda</a>
            </li>

      </ul>

      <ul class="navbar-nav navbar-right">

              @if(Route::has('login'))
                  @auth
                      <li class="nav-item">
                          <a class="nav-link text-warning" href="{{action('UserController@verUsuario', ['id' => auth()->user()->id])}}"> {{auth()->user()->usuario }} </a>         <!--muestra el nombre de usuario si no está logueado-->
                      </li>
                      <li class="nav-item">
                          <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                              {{ csrf_field() }}
                              <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                  Cerrar Sesión
                                  <i class="fas fa-sign-out-alt"></i>
                              </button>
                          </form>
                      </li>
                  @else
                  <li>
                      <a href="{{ route('login') }}"  style="display:inline" style="text-decoration: none">

                          <button type="submit" class="btn btn-link nav-link text-warning" style="display:inline;cursor:pointer">
                              Loguearse
                              <i class="fas fa-user"></i>
                          </button>
                      </a>
                  </li>

                  @endauth
              @endif
      </ul>

    </div>
    </nav>
</header>
