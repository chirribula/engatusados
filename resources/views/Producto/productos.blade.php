<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Productos - Engatusados</title>
    <script src="https://kit.fontawesome.com/423fa98c0f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    <link rel="icon" href="{!! url('img/IconoGato2.png') !!}">
</head>
<body>
    @include('includes.header')
    <div class="container-fluid mb-5"  style="height: 800px">
        <div class="row mt-3">
            <div class="col-12 ">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" style="color:black" id="home-tab" data-toggle="tab" href="#todos" role="tab" aria-controls="todos" aria-selected="true">Todos los productos</a>
                    </li>
                    @foreach ($categorias as $categoria)
                        <li class="nav-item">
                            <a class="nav-link" style="color:black" id="profile-tab" data-toggle="tab" href="#{{$categoria->nombre}}" role="tab" aria-controls="{{$categoria->nombre}}" aria-selected="false">{{$categoria->nombre}}</a>
                        </li>
                    @endforeach

                    @if(Route::has('login'))          <!--Si no está logueado ni es admin no muestra el botón-->
                        @auth
                            @if(auth()->user()->rol=='admin')
                            <li>
                                <a href="{{action('CategoriaController@insertarCategoria')}}"><button type="button" class="btn btn-warning ">Insertar Categoría</button></a>
                            </li>
                            <li>
                                <a href="{{action('ProductoController@insertarProducto')}}"><button type="button" class="btn btn-info ">Añadir Producto</button></a>
                            </li>
                            @endif
                        @endauth
                    @endif
                  <!--Aparece el botón si eres administrador-->
                </ul>



                <!-- todos -->

                <div class="tab-content mb-5 " id="myTabContent">

                    <div class="tab-pane fade show active pb-5 mb-5" id="todos" role="tabpanel" aria-labelledby="todos-tab">
                        <div class="row">
                            <div class="col-md-12">

                                <h3 class="text-center m-4  mt-4 mb-4 text-secondary">TODOS LOS PRODUCTOS</h3>

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

                                @if (session()->has('status2'))
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8 justify-content-between" >
                                        <div class="alert alert-success alert-dismissable  mt-4 mb-2 text-center" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            {{session('status2')}}
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                @endif

                                <div class="row">
                                    @foreach ($productos as $producto)
                                            <a href="{{ action('ProductoController@getShow', ['id' => $producto->id]) }}" style="text-decoration: none; color:black;">
                                                <div class="col-md-3 col-sm-6 mb-4 text-center">
                                                        <div class="card" >
                                                            <img class="card-img-top" src="{{action('ProductoController@getImage',['filename'=>$producto->imagen])}}" alt="{{$producto->nombre}}" width="100%" height="350px;"  style="opacity:1;"  >
                                                            <div class="card-body">
                                                                <h5 class="card-title ">{{$producto->nombre}}</h5>
                                                                <p class="card-text">{{$producto->precio}} €</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <span class="text-white">{{$cont++}}</span>
                                                </div>
                                            </a>
                                     @endforeach
                                     @if($cont==0)
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6 justify-content-between" >
                                            <div class="alert alert-secondary alert-dismissable p-5 mt-4 mb-2 text-center" role="alert">
                                                NO HAY PRODUCTOS REGISTRADOS
                                            </div>
                                        </div>
                                        <div class="col-md-3"></div>
                                     @endif
                                     <span class="text-white">{{$cont=0}}</span> <!--para que el contador se ponga a 0 otra vez-->
                                </div>
                                <div class="row">
                                    <div class="col-5"></div>
                                    <div class="col-2 ml-5 mt-5 text-center">
                                         <div class="clearFix">{{$productos->links()}}</div>
                                    </div>
                                    <div class="col-5"></div>
                                </div>
                                </div>
                            </div>
                        </div>



                    @foreach ($categorias as $categoria)
                        <div class="tab-pane fade" id="{{$categoria->nombre}}" role="tabpanel" aria-labelledby="{{$categoria->nombre}}-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-center m-4  mt-3 mb-5 text-secondary">{{$categoria->nombre}} </h3>

                                    @if (session()->has('status'))
                                        <div class="alert alert-success alert-dismissable mt-4 mb-2" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            {{session('status')}}
                                        </div>
                                    @endif
                                    <div class="row">
                                        @foreach ($productos as $producto)
                                            @if($producto->categoria==$categoria->id)
                                            <a href="{{ action('ProductoController@getShow', ['id' => $producto->id]) }}" style="text-decoration: none; color:black;">
                                                <div class="col-md-3 col-sm-6 mb-4 text-center">
                                                            <div class="card" >
                                                                <img class="card-img-top" src="{{action('ProductoController@getImage',['filename'=>$producto->imagen])}}" alt="{{$producto->nombre}}" width="100%" height="350px;"  style="opacity:1;"  >
                                                                <div class="card-body">
                                                                    <h5 class="card-title ">{{$producto->nombre}}</h5>
                                                                    <p class="card-text">{{$producto->precio}} €</p>
                                                                </div>
                                                            </div>
                                                        </a> <span class="text-white">{{$cont++}}</span>
                                                    </div>
                                                </a>
                                            @endif
                                        @endforeach
                                        @if($cont==0)
                                            <div class="col-md-3"></div>
                                            <div class="col-md-6 justify-content-between" >
                                                <div class="alert alert-secondary alert-dismissable p-5 mt-4 mb-2 text-center" role="alert">
                                                    NO HAY PRODUCTOS EN LA CATEGORÍA DE {{$categoria->nombre}}
                                                </div>
                                            </div>
                                            <div class="col-md-3"></div>
                                        @endif
                                        <span class="text-white">{{$cont=0}}</span> <!--para que el contador se ponga a 0 otra vez-->
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </div>
    </div>
    @include('includes.footer')
</body>
</html>
