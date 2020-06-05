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

            @if (session()->has('status'))
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 justify-content-between" >
                    <div class="alert alert-success alert-dismissable  mt-4 mb-2 text-center" role="alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{session('status')}}
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            @endif


            <div class="row mb-5">
               <div class="col-sm-8 mt-4 mb-3 pb-5" max-height="700px">

                    <img src="{{action('GatoController@getImage',['filename'=>$gato->imagen])}}" class="img-fluid" alt="poster de la pelicula" width="100%"   style="max-height:700px" style="opacity:1"  >

                </div>

                <div class="col-sm-4 p-3 mt-1 mb-5 pb-5 text-center">
                    <table class="table ">
                        <thead >
                            <tr>
                                <th scope="col" colspan="2"><h3 class="pb-4 pt-2 text-secondary">{{$gato->nombre}}</h3></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-secondary">
                                <td>Raza:</td>
                                <td>{{$gato->raza}}</td>
                            </tr>
                            <tr>
                                <td>Sexo:</td>
                                <td>{{$gato->sexo}}</td>
                            </tr>
                            <tr class="table-secondary">
                                <td>Colores:</td>
                                <td>{{$gato->colores}}</td>
                            </tr>
                            <tr>
                                <td>Castrado:</td>
                                <td>{{$gato->castrado}}</td>
                            </tr>
                            <tr class="table-secondary">
                                <td>Edad:</td>
                                <td>{{$gato->edad}}</td>
                            </tr>
                            <tr>
                                <td>Direccion:</td>
                                <td>{{$gato->direccion}}</td>
                            </tr>
                            <tr class="table-secondary">
                                <td>Localidad:</td>
                                <td>{{$gato->localidad}}</td>
                            </tr>
                            <tr>
                                <td>Provincia:</td>
                                <td>{{$gato->provincia}}</td>
                            </tr>
                            <tr class="table-secondary">
                                <td>Telefono:</td>
                                <td>{{$usuario->telefono}}</td>
                            </tr>
                            <tr>
                                <td>Email}:</td>
                                <td>{{$usuario->email}}</td>
                            </tr>
                            <tr class="table-secondary">
                                <td >Descripción:</td>
                                <td>{{$gato->descripcion}}</td>
                            </tr>

                        <tr>
                            <td colspan="2">
                                @if($gato->estado=="Perdido")
                                        <p style="color:red;font-weight:bolder; font-size:20px;">PERDIDO</p>
                                @elseif($gato->estado=="Encontrado")
                                        <p style="color:green; font-weight:bolder; font-size:20px;">ENCONTRADO</p>
                                @elseif($gato->estado=="Adopción")
                                        <p style="color:blue; font-weight:bolder; font-size:20px;">ADOPCIÓN</p>
                                @endif
                            </td>
                         </tr>

                        <tr>
                            <td>
                                @if($gato->usuarioId==auth()->id() || auth()->user()->rol=='admin')
                                        <a href="{{ action('GatoController@editarGato', ['id' => $gato->id] ) }}" class="btn btn-warning">Modificar gato</a>
                                @endif
                            </td>
                            <td>
                                @if($gato->usuarioId==auth()->id() || auth()->user()->rol=='admin')
                                        <a href="{{ action('GatoController@borrarGato', ['id' => $gato->id] ) }}" class="btn btn-danger">Eliminar gato</a>
                                @endif
                            </td>
                        </tr>

                        </tbody>
                    </table>

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
