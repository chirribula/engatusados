<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Editar usuario - Engatusados</title>
    <link href="https://fonts.googleapis.com/css?family=Lora|Solway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/423fa98c0f.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{!! url('img/IconoGato.png') !!}">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
</head>
<body>
    @include('includes.header')
        <div class="container mb-5">
            <h3 class="text-center mt-5 mb-5 text-info">MODIFICAR USUARIO</h3>
                <form action="{{action('UserController@update',['id'=>$usuario->id])}}" method="POST" enctype="multipart/form-data" style="height: 600px">
                    <input type="hidden" name="_method" value="PUT">
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{$usuario->nombre}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Apellidos:</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{$usuario->apellidos}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Nombre de usuario:</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" value="{{$usuario->usuario}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Direccion:</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" value="{{$usuario->direccion}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Localidad:</label>
                            <input type="text" class="form-control" id="localidad" name="localidad" value="{{$usuario->localidad}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Provincia:</label>
                            <input type="text" class="form-control" id="provincia" name="provincia" value="{{$usuario->provincia}}">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label>Teléfono:</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" value="{{$usuario->telefono}}">
                        </div>
                        <div class="form-group col-md-2">
                            <label>Fecha de nacimiento:</label>
                            <input type="date" class="form-control" id="fecha" name="fecha" value="{{$usuario->fecha}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$usuario->email}}">
                        </div>
                        <div class="form-group col-md-2">
                            <label>Contraseña:</label>
                            <input type="password" class="form-control" id="password" name="password" value="{{$usuario->password}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                        </div>
                        <div class="form-group col-md-3">
                            <button type="submit" name="submit" class="btn btn-info mt-5">Modificar Usuario</button>
                        </div>
                        <div class="form-group col-md-4">
                        </div>
                    </div>
                </form>
            </div>

        </div>






        </div>
    @include('includes.footer')
</body>
</html>
