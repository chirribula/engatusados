<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Insertar Gato - Engatusados</title>
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
</head>
<body>
    @include('includes.header')

            <div class="container">
                <h2 class="text-center">Añadir Gato</h2>
                <form action="" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    {{csrf_field()}}

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="edad">Edad:</label>
                            <input type="text" class="form-control" id="edad" name="edad">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="raza">Raza:</label>
                            <input type="text" class="form-control" id="raza" name="raza">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Sexo:</label>
                            <input type="text" class="form-control" id="sexo" name="sexo">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Direccion:</label>
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Imagen:</label>
                            <input type="file" class="form-control" id="imagen" name="imagen">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="estado">Estado:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estado" id="perdido" value="perdido">
                                <label class="form-check-label" for="perdido">Perdido</label> <br>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estado" id="encontrado" value="encontrado">
                                <label class="form-check-label" for="encontrado">Encontrado</label><br>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estado" id="adopcion" value="adopcion" >
                                <label class="form-check-label" for="adopcion">Adopcion</label><br>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="sinopsis">Descripcion:</label>
                        <textarea class="form-control" rows="3" type="text" id="descripcion" name="descripcion"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-info">Añadir Gato</button>
                </form>
            </div>


    @include('includes.footer')
</body>
</html>
