<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Insertar Producto - Engatusados</title>
    <link href="https://fonts.googleapis.com/css?family=Lora|Solway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/423fa98c0f.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{!! url('img/IconoGato2.png') !!}">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
</head>
<body>
    @include('includes.header')

            <div class="container mb-5">
                <h3 class="text-center mt-5 mb-5 text-info">AÑADIR UN PRODUCTO</h3>
                <form action="{{action('ProductoController@save')}}" method="POST" enctype="multipart/form-data" style="height: 600px">
                    {{csrf_field()}}

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nombre">{{ __('Nombre:') }}</label>
                            <input type="text" class="form-control" id="nombre" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}"  placeholder="Nombre del producto" autocomplete="nombre" autofocus required>
                            @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="marca">{{ __('Marca:') }}</label>
                            <input type="text" class="form-control" id="marca" class="form-control @error('marca') is-invalid @enderror" name="marca" value="{{ old('marca') }}"  autocomplete="marca" autofocus placeholder="Marca del producto" required>
                            @error('marca')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label for="precio">Precio:</label>
                            <input type="number" class="form-control" id="precio" class="form-control @error('precio') is-invalid @enderror" name="precio" value="{{ old('precio') }}"  autocomplete="precio" placeholder="Precio del producto"required>
                            @error('precio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="categoria">{{ __('Categoria:') }}</label>
                            <select class="form-control" id="categoria" class="form-control @error('categoria') is-invalid @enderror" name="categoria" value="{{ old('categoria') }}"  autocomplete="categoria" required>
                                @foreach ($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                               @endforeach
                            </select>
                            @error('categoria')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label>{{ __('Tamaño:') }}</label>
                            <input type="text" class="form-control" id="tamaño" class="form-control @error('tamaño') is-invalid @enderror" name="tamaño" value="{{ old('tamaño') }}"  autocomplete="tamaño" placeholder="Tamaño del producto" required>
                            @error('tamaño')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label>{{ __('Imagen:') }}</label>
                            <input type="file" class="form-control" id="imagen" class="form-control @error('imagen') is-invalid @enderror" name="imagen" value="{{ old('imagen') }}"  autocomplete="imagen" required>
                            @error('imagen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="sinopsis">{{ __('Descripcion:') }}</label>
                            <textarea class="form-control" rows="3" type="text" id="descripcion" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}"  autocomplete="descripcion" placeholder="Escriba una descripción del gato" required></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>{{ __('Stock:') }}</label>
                            <input type="number" class="form-control" id="stock" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}"  autocomplete="stock" placeholder="Unidades del producto" required>
                            @error('stock')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                        </div>
                        <div class="form-group col-md-3"><button type="submit" name="submit" class="btn btn-info">Insertar Producto</button>
                        </div>
                        <div class="form-group col-md-4">
                    </div>

                </form>
            </div>


    @include('includes.footer')
</body>
</html>
