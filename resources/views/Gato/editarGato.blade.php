<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Editar gato - Engatusados</title>
    <link href="https://fonts.googleapis.com/css?family=Lora|Solway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/423fa98c0f.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{!! url('img/IconoGato.png') !!}">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
</head>
<body>
    @include('includes.header')
        <div class="container mb-5">
            <h3 class="text-center mt-5 mb-5 text-info">EDITAR GATO</h3>
                <form action="{{action('GatoController@updateGato',['id'=>$gato->id])}}" method="POST" enctype="multipart/form-data" style="height: 600px">

                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{$gato->nombre}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="edad">Edad:</label>
                            <input type="text" class="form-control" id="edad" name="edad" value="{{$gato->edad}}"required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="raza">Raza:</label>
                            <input type="text" class="form-control" id="raza" name="raza" value="{{$gato->raza}}"required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="sexo">Sexo:</label>
                            <select class="form-control" id="sexo" name="sexo" value="{{$gato->sexo}}" required>
                              <option value="macho">Macho</option>
                              <option value="hembra">Hembra</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Direccion:</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" value="{{$gato->direccion}}"required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Localidad:</label>
                            <input type="text" class="form-control" id="localidad" name="localidad" value="{{$gato->localidad}}"required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Provincia:</label>
                            <input type="text" class="form-control" id="provincia" name="provincia" value="{{$gato->provincia}}"required>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Imagen:</label>
                            <input type="file" class="form-control" id="imagen" name="imagen" value="{{$gato->imagen}}" >
                        </div>

                        <div class="form-group col-md-4">
                            <label>Colores:</label>
                            <input type="text" class="form-control" id="colores" name="colores" value="{{$gato->colores}}"required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="estado">Estado:</label>
                            <select class="form-control" id="estado" name="estado" value="{{$gato->estado}}" required>
                              <option>Perdido</option>
                              <option>Encontrado</option>
                              <option>Adopción</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Castrado:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="castrado" id="castradoSi"  value="si" checked>
                                <label class="form-check-label" for="perdido">Sí</label> <br>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="castrado" id="castradoNo" value="no">
                                <label class="form-check-label" for="encontrado">No</label><br>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="sinopsis">Descripcion:</label>
                        <textarea class="form-control" rows="3" type="text" id="descripcion" name="descripcion" required>{{$gato->descripcion}}</textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-info">Modificar Gato</button>
                </form>
            </div>

        </div>






        </div>
    @include('includes.footer')
</body>
</html>
