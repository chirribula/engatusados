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
                    <li>
                        <a href="{{action('CategoriaController@insertarCategoria')}}"><button type="button" class="btn btn-warning ">Insertar Categoría</button></a>
                    </li>
                  <!--Aparece el botón si eres administrador-->
                </ul>



                <!-- todos -->

                <div class="tab-content mb-5 " id="myTabContent">

                    <div class="tab-pane fade show active" id="todos" role="tabpanel" aria-labelledby="todos-tab">
                        <div class="row">
                            <div class="col-md-12">

                                <h3 class="text-center m-4  mt-5 mb-5 text-info">TODOS LOS PRODUCTOS</h3>

                                @if (session('status'))
                                    <p style="color:#6c757d; font-size:20px;">{{session('status')}}</p>  <!-- si existe el estado muestra el mensaje -->
                                 @endif

                                <div class="row">
                                    @foreach ($productos as $producto)
                                            <a href="" style="text-decoration: none; color:black;">
                                                <div class="col-xs-6 col-sm-4 col-md-3 mt-3 text-center" >
                                                        <div class="card" >
                                                            <img class="card-img-top" src="" alt="producto" width="100%" height="350px;"  style="opacity:1;"  >
                                                            <div class="card-body">
                                                                <h5 class="card-title ">{{$producto->nombre}}</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </a>
                                     @endforeach

                                    </div>
                                    <div class="row">
                                        <div class="col-5"></div>
                                        <div class="col-2 ml-5 mt-5 text-center">
                                             <div class="clearFix"></div>
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
                                    <h3 class="text-center m-4  mt-5 mb-5 text-info">{{$categoria->nombre}}</h3>
                                    @if (session('status'))
                                        <p style="color:rgb(29, 188, 236); font-size:20px;">{{session('status')}}</p>  <!-- si existe el estado muestra el mensaje -->
                                    @endif
                                    <div class="row">
                                        @foreach ($productos as $producto)
                                            @if($producto->categoria==$categoria->id)
                                                <a href="" style="text-decoration: none; color:black;">
                                                    <div class="col-xs-6 col-sm-4 col-md-3 mt-3 text-center" >
                                                            <div class="card" >
                                                                <img class="card-img-top" src="" alt="gato" width="100%" height="350px;"  style="opacity:1;"  >
                                                                <div class="card-body">
                                                                    <h5 class="card-title ">{{$producto->nombre}}</h5>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </a>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="row">
                                        <div class="col-5"></div>
                                        <div class="col-2 ml-5 mt-5 text-center">
                                            <div class="clearFix"></div>
                                        </div>
                                        <div class="col-5"></div>
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
