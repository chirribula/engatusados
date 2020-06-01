<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>ver un gato - Engatusados</title>
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
</head>
<body>
    @include('includes.header')
        <div class="container-fluid" >


            <div class="row">

               <div class="col-sm-6 mt-4">

                    <img src="{{action('GatoController@getImage',['filename'=>$gato->imagen])}}" alt="poster de la pelicula" width="700px;"  style="opacity:1"  >

                </div>

                <div class="col-sm-6 p-3">
                    <h1 class="pb-5"> {{$gato->nombre}}</h1>
                    <p>{{$gato->raza}}</p>
                    <p>{{$gato->sexo}}</p>
                    <p>{{$gato->edad}}</p>
                    <p>{{$gato->descripcion}}</p>

                   @if($gato->estado=="Perdido")
                        <p style="color:red;font-weight:bolder; font-size:30px;">Perdido</p>

                   @elseif($gato->estado=="Encontrado")
                        <p style="color:green; font-weight:bolder; font-size:30px;">Encontrado</p>
                    @elseif($gato->estado=="Adopcion")
                        <p style="color:blue; font-weight:bolder; font-size:30px;">Adopcion</p>
                   @endif

                </div>

            </div>

        </div>
    @include('includes.footer')
</body>
</html>
