<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Compra producto / Engatusados</title>
    <link href="https://fonts.googleapis.com/css?family=Lora|Solway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/423fa98c0f.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{!! url('img/IconoGato2.png') !!}">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
</head>
<body>
    @include('includes.header')
        <div class="container-fluid">
            @if (session()->has('status'))
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 justify-content-between">
                        <div class="alert alert-danger alert-dismissable  mt-4 mb-2 text-center" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            {{session('status')}}
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                @endif
                <div class="row">
                    <p class="col mt-3 text-warning"><a href="{{ URL::previous() }}"><button type="button" class="btn btn-warning text-white"><< Atrás</button></a></p>
                </div>
            <div class="row mb-4">
                <div class="col-sm-3  mb-3 pb-5"></div>
                <div class="col-sm-6  mb-5 pb-5">
                    <table class="table  text-center">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">
                                    <h3 class="pb-4 pt-2 text-secondary">GESTIONAR COMPRA</h3>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                               <td colspan="2"> <img src="{{action('ProductoController@getImage',['filename'=>$producto->imagen])}}" class="img-fluid" alt="producto" width="20%"   style="max-height:700px" style="opacity:1"></td>
                            </tr>
                            <tr class="table-secondary">
                                <td>NOMBRE:</td>
                                <td>{{$producto->nombre}}</td>
                            </tr>
                            <tr >
                                <td>PRECIO:</td>
                                <td>{{$producto->precio}}</td>
                            </tr class="table-secondary">
                            <tr class="table-secondary">
                                <td>MARCA:</td>
                                <td>{{$producto->marca}}</td>
                            </tr>
                            <tr>
                                <td>TAMAÑO:</td>
                                <td>{{$producto->tamaño}}</td>
                            </tr>

                            <tr class="table-secondary">
                                <td>MARCA:</td>
                                <td>{{$producto->marca}}</td>
                            </tr>

                            <tr class="table-secondary">
                                <tr>
                                    <td >UNIDADES:</td>
                                    <td>
                                        <form action="{{action('ProductoController@comprobarCompra',['id'=>$producto->id])}}" method="POST" >
                                            {{csrf_field()}}
                                            <input type="number"  id="unidades"  name="unidades"  min='1' required>

                                    </td>
                                </tr>
                            </tr>

                            <tr class="table-secondary">
                                <td colspan="2">
                                    <button type="submit" name="submit" class="btn btn-warning">COMPRAR</button>
                                </form>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="col-sm-3  mb-3 pb-5" ></div>
            </div>
        </div>
    @include('includes.footer')
</body>
</html>
