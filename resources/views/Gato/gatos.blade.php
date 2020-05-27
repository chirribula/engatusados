<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Gatos - Engatusados</title>
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
</head>
<body>
    @include('includes.header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#encontrados" role="tab" aria-controls="encontrados" aria-selected="true">Encontrados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#perdidos" role="tab" aria-controls="perdidos" aria-selected="false">Perdidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#adopcion" role="tab" aria-controls="adopcion" aria-selected="false">En adopción</a>
                    </li>
                </ul>


                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="encontrados" role="tabpanel" aria-labelledby="encontrados-tab">
                        <div class="row">
                            <div class="col-md-12">

                                <h3 class="text-center m-4 ">GATOS ENCONTRADOS</h3>

                                @if (session('status'))
                                    <p style="color:blue; font-size:30px;">{{session('status')}}</p>  <!-- si existe el estado muestra el mensaje -->
                                @endif
                                <div class="row">
                                    <a href="{{action('GatoController@insertarGato')}}"><button type="button" class="btn btn-info">Insertar Gato</button></a>
                                </div>
                                <div class="row">
                                    @foreach ($gatos as $gato)
                                         @if($gatos->perdido==1)
                                            <div class="col-xs-6 col-sm-4 col-md-3 mt-3 text-center" >
                                                <a href="{{ action('GatoController@getShow', ['id' => $gato->id]) }}" style="text-decoration: none; color:black;">  <!--si pongo el enlace aquí pulsando en la imagen redirige-->
                                                    <div class="card" >

                                                        <img class="card-img-top" src="{{$gato->imagen}}" alt="poster de la pelicula" width="100%" height="350px;"  style="opacity:1;"  >


                                                        <div class="card-body">
                                                        <h5 class="card-title ">{{$gato->nombre}}</h5>
                                                        <a href="{{ action('GatoController@getShow', ['id' => $gato->id]) }}" class="btn btn-primary">Ver Gato</a>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                     @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="perdidos" role="tabpanel" aria-labelledby="perdidos-tab">
                        <div class="row">
                            <div class="col-md-12">

                                <h3 class="text-center m-4 ">GATOS PERDIDOS</h3>

                                @if (session('status'))
                                    <p style="color:blue; font-size:30px;">{{session('status')}}</p>  <!-- si existe el estado muestra el mensaje -->
                                @endif
                                <div class="row">
                                    <a href="{{action('GatoController@insertarGato')}}"><button type="button" class="btn btn-info">Insertar Gato</button></a>
                                </div>
                                <div class="row">
                                    @foreach ($gatos as $gato)
                                         @if($gatos->perdido==1)
                                            <div class="col-xs-6 col-sm-4 col-md-3 mt-3 text-center" >
                                                <a href="{{ action('GatoController@getShow', ['id' => $gato->id]) }}" style="text-decoration: none; color:black;">  <!--si pongo el enlace aquí pulsando en la imagen redirige-->
                                                    <div class="card" >

                                                        <img class="card-img-top" src="{{$gato->imagen}}" alt="poster de la pelicula" width="100%" height="350px;"  style="opacity:1;"  >


                                                        <div class="card-body">
                                                        <h5 class="card-title ">{{$gato->nombre}}</h5>
                                                        <a href="{{ action('GatoController@getShow', ['id' => $gato->id]) }}" class="btn btn-primary">Ver Gato</a>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                     @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="adopcion" role="tabpanel" aria-labelledby="adopcion-tab">
                        <div class="row">
                            <div class="col-md-12">

                                <h3 class="text-center m-4 ">GATOS EN ADOPCIÓN</h3>

                                @if (session('status'))
                                    <p style="color:blue; font-size:30px;">{{session('status')}}</p>  <!-- si existe el estado muestra el mensaje -->
                                @endif
                                <div class="row">
                                    <a href="{{action('GatoController@insertarGato')}}"><button type="button" class="btn btn-info">Insertar Gato</button></a>
                                </div>
                                <div class="row">
                                    @foreach ($gatos as $gato)
                                         @if($gatos->perdido==1)
                                            <div class="col-xs-6 col-sm-4 col-md-3 mt-3 text-center" >
                                                <a href="{{ action('GatoController@getShow', ['id' => $gato->id]) }}" style="text-decoration: none; color:black;">  <!--si pongo el enlace aquí pulsando en la imagen redirige-->
                                                    <div class="card" >

                                                        <img class="card-img-top" src="{{$gato->imagen}}" alt="poster de la pelicula" width="100%" height="350px;"  style="opacity:1;"  >


                                                        <div class="card-body">
                                                        <h5 class="card-title ">{{$gato->nombre}}</h5>
                                                        <a href="{{ action('GatoController@getShow', ['id' => $gato->id]) }}" class="btn btn-primary">Ver Gato</a>
                                                        </div>
                                                    </div>

                                                </a>
                                            </div>
                                        @endif
                                     @endforeach
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
</body>
</html>
