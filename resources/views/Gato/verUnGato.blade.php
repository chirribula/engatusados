<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Ver un gato / Engatusados</title>
    <link href="https://fonts.googleapis.com/css?family=Lora|Solway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/423fa98c0f.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{!! url('img/IconoGato2.png') !!}">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
</head>
<body>
    @include('includes.header')
        <div class="container-fluid" >


            <div class="row mb-5">

               <div class="col-sm-8 mt-4 mb-3 pb-5">

                    <img src="{{action('GatoController@getImage',['filename'=>$gato->imagen])}}" class="img-fluid" alt="poster de la pelicula" width="100%"  style="opacity:1"  >

                </div>

                <div class="col-sm-4 p-3 mt-1 mb-5 pb-5 text-center">
                    <h3 class="pb-4 pt-2 text-info">{{$gato->nombre}}</h3>
                    <p>Raza: {{$gato->raza}}</p>
                    <p>Sexo: {{$gato->sexo}}</p>
                    <p>Colores: {{$gato->colores}}</p>
                    <p>Castrado: {{$gato->castrado}}</p>
                    <p>Edad: {{$gato->edad}}</p>
                    <p>Direccion: {{$gato->direccion}}</p>
                    <p>Localidad: {{$gato->localidad}}</p>
                    <p>Provincia: {{$gato->provincia}}</p>
                    <p>Teléfono: {{$usuario->telefono}}</p>
                    <p>Email de {{$usuario->usuario}}: {{$usuario->email}}</p>
                    <p>Descripción: {{$gato->descripcion}}</p>

                   @if($gato->estado=="Perdido")
                        <p style="color:red;font-weight:bolder; font-size:20px;">Perdido</p>
                   @elseif($gato->estado=="Encontrado")
                        <p style="color:green; font-weight:bolder; font-size:20px;">Encontrado</p>
                   @elseif($gato->estado=="Adopción")
                        <p style="color:blue; font-weight:bolder; font-size:20px;">Adopción</p>
                   @endif

                   @if($gato->usuarioId==auth()->id())
                        <a href="{{ action('GatoController@editarGato', ['id' => $gato->id] ) }}" class="btn btn-warning">Modificar gato</a>
                   @endif

                </div>

            </div>
<!--
            <div class="row">
                <div class="col mt-5">
                    <div id="contenido" class="contacto">

                        <div id="map" style="width:870px; height: 600px;"></div>

                         <script>
                            var map;
                            function initMap() {
                              map = new google.maps.Map(document.getElementById('map'), {
                                center: {lat: 36.51296812497293,lng: -6.2748654961966395},
                                zoom: 18
                              });
                              var marker=new google.maps.Marker({
                                  position: {lat: 36.51296812497293,lng: -6.2748654961966395},
                                  map: map,
                                  title: 'localización del gato',
                                  animation:google.maps.Animation.BOUNCE
                            });
                            }
                          </script>

                          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFbv4HfweEb0e4gW-WKH3ANmc_eQZwvVM&callback=initMap"async defer></script>
                      </div>
                </div>
            </div>
   -->
        </div>
    @include('includes.footer')
</body>
</html>
