<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Ver un producto / Engatusados</title>
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


            <div class="row mb-4 mt-2">

                <div class="col-sm-2 mt-4 mb-3 pb-5" ></div>
               <div class="col-sm-4 mt-5 mb-3 pb-5" max-height="700px">

                    <img src="{{action('ProductoController@getImage',['filename'=>$producto->imagen])}}" class="img-fluid" alt="producto" width="100%"   style="max-height:700px" style="opacity:1"  >

                </div>

                <div class="col-sm-4 p-3 mt-3 mb-5 pb-5 text-center">
                    <table class="table ">
                        <thead >
                            <tr>
                                <th scope="col" colspan="2"><h3 class="pb-4 pt-2 text-secondary">{{$producto->nombre}}</h3></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-secondary">
                                <td>PRECIO:</td>
                                <td>{{$producto->precio}}</td>
                            </tr>
                            <tr>
                                <td>MARCA:</td>
                                <td>{{$producto->marca}}</td>
                            </tr>
                            <tr class="table-secondary">
                                <td>CATEGORIA:</td>
                                <td>{{$categoria->nombre}}</td>
                            </tr>

                            <tr>
                                <td >DESCRIPCION:</td>
                                <td>{{$producto->descripcion}}</td>
                            </tr>
                            <tr class="table-secondary">
                                @if($producto->stock < 1)
                                    <td colspan="2">
                                        <p style="color:red;font-weight:bolder; font-size:20px;">AGOTADO</p>
                                    </td>
                                 @else
                                    <td>
                                        <p style="color:green; font-weight:bolder; font-size:20px;">DISPONIBLE</p>
                                    </td>
                                    <td>
                                        <a href="{{ action('ProductoController@comprarProducto', ['id' => $producto->id]) }}" class="btn btn-warning">COMPRAR</a>
                                    </td>
                                @endif
                            </tr>

                            @if(Route::has('login'))          <!--Si no está logueado ni es admin no muestra el botón-->
                                @auth
                                    @if(auth()->user()->rol=='admin')
                                    <tr>
                                        <td>Stock:</td>
                                        <td>{{$producto->stock}}</td>
                                    </tr>
                                    <tr  class="table-secondary">
                                        <td>
                                            <a href="{{ action('ProductoController@editarProducto', ['id' => $producto->id]) }}" class="btn btn-success">Editar Producto</a>
                                        </td>
                                        <td>
                                            <a href="{{action('ProductoController@eliminarProducto', ['id' => $producto->id]) }}" class="btn btn-danger">Eliminar Producto</a>
                                        </td>
                                    </tr>
                                    @endif
                                @endauth
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @include('includes.footer')
</body>
</html>
