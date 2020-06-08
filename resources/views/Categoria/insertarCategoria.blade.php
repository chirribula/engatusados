<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Insertar Categoria - Engatusados</title>
    <link href="https://fonts.googleapis.com/css?family=Lora|Solway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/423fa98c0f.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{!! url('img/IconoGato2.png') !!}">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
</head>
<body>
    @include('includes.header')

    <div class="container-fluid mb-5">
        <div class="row">
            <p class="col mt-3 text-warning"><a href="{{ URL::previous() }}"><button type="button" class="btn btn-warning text-white"><< Atrás</button></a></p>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3 class="text-center mb-5 text-secondary">AÑADIR UNA CATEGORIA</h3>
                <form action="{{action('CategoriaController@save')}}" method="POST" enctype="multipart/form-data" style="height: 600px">
                    {{csrf_field()}}
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <p>Corrige el siguiente error:</p>
                            <ul>
                                @foreach ($errors->all() as $message)
                                    <li>El nombre de la categoría ya existe</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <div class="form-row">
                        <div class="form-group col-md-12 text-center">
                            <label for="nombre">{{ __('Nombre:') }}</label>
                            <input type="text" class="form-control mt-4 mb-4" id="nombre" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}"  placeholder="Nombre de la categoría" autocomplete="nombre" autofocus required>
                            @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row text-center">
                        <div class="col-12">
                            <button type="submit" name="submit " class="btn btn-info ">Añadir Categoría</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    @include('includes.footer')
</body>
</html>
