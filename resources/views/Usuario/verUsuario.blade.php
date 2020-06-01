<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>ver usuario - Engatusados</title>
    <link href="https://fonts.googleapis.com/css?family=Lora|Solway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/423fa98c0f.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{!! url('img/IconoGato2.png') !!}">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
</head>
<body>
    @include('includes.header')
        <div class="container-fluid mb-5 pb-5" >


            <div class="row mt-5">

                <div class="col-sm-1 p-3">
                </div>

                <div class="col-sm-4 p-3 mt-3">
                    <h2 class="pb-5 text-info" > {{auth()->user()->usuario}}</h2>
                    <p> Nombre: {{$usuario->nombre}}</p>
                    <p> Apellidos: {{$usuario->apellidos}}</p>
                    <p> Teléfono: {{$usuario->telefono}}</p>
                    <p> Direccion: {{$usuario->direccion}}</p>
                    <p> Localidad: {{$usuario->localidad}}</p>
                    <p> Provincia: {{$usuario->provincia}}</p>

                    <br><br>

                    <a href="{{ action('UserController@edit', ['id' => $usuario->id] ) }}" class="btn btn-warning">Modificar datos</a>

                </div>

                <div class="col-sm-7 mt-4">
                    <div class="ros">
                        <h3 class="text-info text-center">TUS GATOS</h3>
                    </div>
                    <div class="row">
                        @foreach ($gatos as $gato)
                            @if($gato->usuarioId==$usuario->id)
                            <a href="{{ action('GatoController@getShow', ['id' => $gato->id]) }}" style="text-decoration: none; color:black;">
                                <div class="col-xs-6 col-sm-6 col-md-6 mt-3 text-center" >
                                        <div class="card" >
                                            <img class="card-img-top" src="{{action('GatoController@getImage',['imagen'=>$gato->imagen])}}" alt="gato" width="100%" height="350px;"  style="opacity:1;"  >
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
    @include('includes.footer')
</body>
</html>
