<header class="text-center bg-warning">
    <h1 id="cabecera"> ENGATUSADOS </h1>

    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{action('GatoController@index')}}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{action('GatoController@mostrarPerdidos')}}">Perdidos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{action('GatoController@mostrarEncontrados')}}">Encontrados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{action('GatoController@mostrarAdopcion')}}">Adopción</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{action('GatoController@verGatos')}}">Gatos</a>
          </li>
        </ul>
      </nav>
</header>
