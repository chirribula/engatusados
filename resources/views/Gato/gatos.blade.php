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
    <div class="container-fluid mb-5"  style="height: 800px">
        <div class="row mt-3">
            <div class="col-12 ">

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
                    <li>
                        <a href="{{action('GatoController@insertarGato')}}"><button type="button" class="btn btn-warning ">Insertar Gato</button></a>
                    </li>
                </ul>



                @if (session('status'))
                    <p style="color:rgb(29, 188, 236); font-size:20px;">{{session('status')}}</p>  <!-- si existe el estado muestra el mensaje -->
                @endif


                <!-- Encontrados -->

                <div class="tab-content mb-5 " id="myTabContent">

                    <div class="tab-pane fade show active" id="encontrados" role="tabpanel" aria-labelledby="encontrados-tab">
                        <div class="row">
                            <div class="col-md-12">

                                <h3 class="text-center m-4 ">GATOS ENCONTRADOS</h3>

                                <div class="row">
                                    <div class="col float-right mr-4">
                                        <a href="{{action('GatoController@insertarGato')}}"><button type="button" class="btn btn-warning float-right">Insertar Gato</button></a>
                                    </div>
                                </div>

                                <div class="row">
                                    @foreach ($gatos as $gato)
                                         @if($gato->estado=='Encontrado')
                                            <a href="{{ action('Gatocontroller@getShow', ['id' => $gato->id]) }}" style="text-decoration: none; color:black;">
                                                <div class="col-xs-6 col-sm-4 col-md-3 mt-3 text-center" >
                                                        <div class="card" >
                                                            <img class="card-img-top" src="{{action('GatoController@getImage',['filename'=>$gato->imagen])}}" alt="gato" width="100%" height="350px;"  style="opacity:1;"  >
                                                            <div class="card-body">
                                                                <h5 class="card-title ">{{$gato->nombre}}</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </a>
                                        @endif
                                     @endforeach
                                </div>
                            </div>
                        </div>
                    </div>


                     <!-- Perdidos -->

                    <div class="tab-pane fade" id="perdidos" role="tabpanel" aria-labelledby="perdidos-tab">
                        <div class="row">
                            <div class="col-md-12">

                                <h3 class="text-center m-4 ">GATOS PERDIDOS</h3>

                                <div class="row">
                                    <div class="col float-right mr-4">
                                        <a href="{{action('GatoController@insertarGato')}}"><button type="button" class="btn btn-warning float-right">Insertar Gato</button></a>
                                    </div>
                                </div>

                                <div class="row">
                                    @foreach ($gatos as $gato)
                                         @if($gato->estado=='Perdido')
                                            <div class="col-xs-6 col-sm-4 col-md-3 mt-3 text-center" >
                                                    <div class="card" >

                                                        <img class="card-img-top" src="{{action('GatoController@getImage',['filename'=>$gato->imagen])}}" alt="gato" width="100%" height="350px;"  style="opacity:1;"  >


                                                        <div class="card-body">
                                                        <h5 class="card-title ">{{$gato->nombre}}</h5>
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

                     <!-- Encontrados -->

                    <div class="tab-pane fade" id="adopcion" role="tabpanel" aria-labelledby="adopcion-tab">
                        <div class="row">
                            <div class="col-md-12">

                                <h3 class="text-center m-4 ">GATOS EN ADOPCIÓN</h3>

                                <div class="row">
                                    <div class="col float-right mr-4">
                                        <a href="{{action('GatoController@insertarGato')}}"><button type="button" class="btn btn-warning float-right">Insertar Gato</button></a>
                                    </div>
                                </div>

                                <div class="row">
                                    @foreach ($gatos as $gato)
                                         @if($gato->estado=='Adopcion')
                                            <div class="col-xs-6 col-sm-4 col-md-3 mt-3 text-center" >
                                                    <div class="card" >

                                                        <img class="card-img-top" src="{{action('GatoController@getImage',['filename'=>$gato->imagen])}}" alt="gato" width="100%" height="350px;"  style="opacity:1;"  >


                                                        <div class="card-body">
                                                        <h5 class="card-title ">{{$gato->nombre}}</h5>
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
