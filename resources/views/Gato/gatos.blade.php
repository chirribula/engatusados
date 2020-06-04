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
    <script src="https://kit.fontawesome.com/423fa98c0f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    <link rel="icon" href="{!! url('img/IconoGato2.png') !!}">
</head>
<body>
    @include('includes.header')
    <div class="container-fluid mb-5"  style="height: 800px">
        <div class="row mt-3">
            <div class="col-12 ">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" style="color:black" id="home-tab" data-toggle="tab" href="#encontrados" role="tab" aria-controls="encontrados" aria-selected="true">Encontrados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:black" id="profile-tab" data-toggle="tab" href="#perdidos" role="tab" aria-controls="perdidos" aria-selected="false">Perdidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:black" id="profile-tab" data-toggle="tab" href="#adopcion" role="tab" aria-controls="adopcion" aria-selected="false">En adopción</a>
                    </li>
                    <li>

                    </li>
                    <li>
                        <a href="{{action('GatoController@insertarGato')}}"><button type="button" class="btn btn-warning ">Insertar Gato</button></a>
                    </li>
                </ul>






                <!-- Encontrados -->

                <div class="tab-content mb-5 " id="myTabContent">

                    <div class="tab-pane fade show active" id="encontrados" role="tabpanel" aria-labelledby="encontrados-tab">
                        <div class="row">
                            <div class="col-md-12">

                                <h3 class="text-center m-4  mt-5 mb-5 text-secondary">GATOS ENCONTRADOS</h3>

                                @if (session()->has('status'))
                                <div class="alert alert-success alert-dismissable mt-4 mb-2" role="alert">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    {{session('status')}}
                                </div>
                                @endif
                                <div class="row" style="min-height:400px">
                                    @foreach ($gatos as $gato)
                                        @if($gato->estado=='Encontrado')
                                        <a href="{{ action('GatoController@getShow', ['id' => $gato->id]) }}" style="text-decoration: none; color:black;">
                                            <div class="col-xs-6 col-sm-4 col-md-3 mt-3 text-center" >
                                                    <div class="card" >
                                                        <img class="card-img-top" src="{{action('GatoController@getImage',['filename'=>$gato->imagen])}}" alt="gato" width="100%" height="350px;"  style="opacity:1;"  >
                                                        <div class="card-body">
                                                            <h5 class="card-title ">{{$gato->nombre}}</h5>
                                                            <p>Edad: {{$gato->edad}} , {{$gato->sexo}}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </a>
                                        <span class="text-white">{{$cont++}}</span>
                                        @endif
                                    @endforeach
                                    @if($cont==0)
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6 justify-content-between" >
                                            <div class="alert alert-secondary alert-dismissable p-5 mt-4 mb-2 text-center" role="alert">
                                                NO HAY GATOS REGISTRADOS ENCONTRADOS
                                            </div>
                                        </div>
                                        <div class="col-md-3"></div>
                                    @endif
                                    <span class="text-white">{{$cont=0}}</span> <!--para que el contador se ponga a 0 otra vez-->
                                </div>
                                <div class="row">
                                    <div class="col-5"></div>
                                    <div class="col-2 ml-5 mt-5 text-center">
                                        <div class="clearFix">{{$gatos->links()}}</div>
                                    </div>
                                    <div class="col-5"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                     <!-- Perdidos -->

                    <div class="tab-pane fade" id="perdidos" role="tabpanel" aria-labelledby="perdidos-tab">
                        <div class="row">
                            <div class="col-md-12">

                                <h3 class="text-center m-4 mt-5 mb-5 text-secondary">GATOS PERDIDOS</h3>

                                @if (session()->has('status'))
                                    <div class="alert alert-success alert-dismissable mt-4 mb-2" role="alert">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        {{session('status')}}
                                    </div>
                                @endif
                                <div class="row" style="min-height:400px">
                                    @foreach ($gatos as $gato)
                                         @if($gato->estado=='Perdido')
                                         <a href="{{ action('GatoController@getShow', ['id' => $gato->id]) }}" style="text-decoration: none; color:black;">
                                            <div class="col-xs-6 col-sm-4 col-md-3 mt-3 text-center" >
                                                    <div class="card" >
                                                        <img class="card-img-top" src="{{action('GatoController@getImage',['filename'=>$gato->imagen])}}" alt="gato" width="100%" height="350px;"  style="opacity:1;"  >
                                                        <div class="card-body">
                                                            <h5 class="card-title ">{{$gato->nombre}}</h5>
                                                            <p>Edad: {{$gato->edad}} , {{$gato->sexo}}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </a>
                                        <span class="text-white">{{$cont++}}</span>
                                        @endif
                                     @endforeach
                                     @if($cont==0)
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6 justify-content-between" >
                                            <div class="alert alert-secondary alert-dismissable p-5 mt-4 mb-2 text-center" role="alert">
                                                NO HAY GATOS REGISTRADOS EN ADOPCIÓN
                                            </div>
                                        </div>
                                        <div class="col-md-3"></div>
                                     @endif
                                     <span class="text-white">{{$cont=0}}</span> <!--para que el contador se ponga a 0 otra vez-->
                                </div>
                                <div class="row">
                                    <div class="col-5"></div>
                                    <div class="col-2 ml-5 mt-5 text-center">
                                         <div class="clearFix">{{$gatos->links()}}</div>
                                    </div>
                                    <div class="col-5"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <!-- Encontrados -->

                    <div class="tab-pane fade" id="adopcion" role="tabpanel" aria-labelledby="adopcion-tab">
                        <div class="row">
                            <div class="col-md-12">

                                <h3 class="text-center m-4 mt-5 mb-5 text-secondary">GATOS EN ADOPCIÓN</h3>
                                @if (session()->has('status'))
                                    <div class="alert alert-success alert-dismissable mt-4 mb-2" role="alert">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        {{session('status')}}
                                    </div>
                                @endif
                                <div class="row"  style="min-height:400px">
                                    @foreach ($gatos as $gato)
                                         @if($gato->estado=='Adopción')
                                            <div class="col-xs-6 col-sm-4 col-md-3 mt-3 text-center" >
                                                <a href="{{ action('GatoController@getShow', ['id' => $gato->id]) }}" style="text-decoration: none; color:black;">
                                                    <div class="card" >
                                                        <img class="card-img-top" src="{{action('GatoController@getImage',['filename'=>$gato->imagen])}}" alt="gato {{$gato->nombre}}" width="100%" height="350px;"  style="opacity:1;"  >
                                                      <div class="card-body">
                                                        <h5 class="card-title ">{{$gato->nombre}}</h5>
                                                            <p>Edad: {{$gato->edad}} , {{$gato->sexo}}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <span class="text-white">{{$cont++}}</span>
                                        @endif
                                     @endforeach
                                     @if($cont==0)
                                     <div class="col-md-3"></div>
                                     <div class="col-md-6 justify-content-between" >
                                        <div class="alert alert-secondary alert-dismissable p-5 mt-4 mb-2 text-center" role="alert">
                                            NO HAY GATOS REGISTRADOS EN ADOPCIÓN
                                        </div>
                                     </div>
                                     <div class="col-md-3"></div>
                                     @endif
                                     <span class="text-white">{{$cont=0}}</span> <!--para que el contador se ponga a 0 otra vez-->
                                </div>
                                <div class="row">
                                    <div class="col-5"></div>
                                    <div class="col-2 ml-5 mt-5 text-center">
                                         <div class="clearFix">{{$gatos->links()}}</div>
                                    </div>
                                    <div class="col-5"></div>
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
