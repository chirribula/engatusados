<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Fruteria</title>
</head>
<body>
    @include('includes.header')
    <div class="container-fluid" >


        <h1 class="text-center m-4">LISTADO DE GATOS</h1>

        @if (session('status'))
            <p style="color:blue; font-size:30px;">{{session('status')}}</p>  <!-- si existe el estado muestra el mensaje -->
        @endif

        <table class="table table-dark table-striped text-center">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Fecha</th>
                <th>Ver detalle</th>
            </tr>
        </thead>
        <tbody>

        @foreach ($gatos as $gato)
            <tr>
                <td>{{$gato->id}}</td>
                <td>{{$gato->nombre}}</td>
                <td>{{$gato->descripcion}}</td>
                <td>{{$gato->raza}}</td>
                <td>{{$gato->sexo}}</td>
                <td>
                  <a href="{{ action('FruteriaController@detalle', ['id' => $gato->id]) }}"><button type="button" class="btn btn-primary">Ver</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>

        </div>
    @include('includes.footer')
</body>
</html>
