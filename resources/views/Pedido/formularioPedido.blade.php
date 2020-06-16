<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Formulario Pedido - Engatusados</title>
    <link href="https://fonts.googleapis.com/css?family=Lora|Solway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/423fa98c0f.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{!! url('img/IconoGato2.png') !!}">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    <script src="{!! asset('js/pagoStripe.js') !!}"></script>
</head>
<body>
    @include('includes.header')

    <div class="container-fluid mb-5">
        <div class="row">
            <p class="col mt-3 text-warning"><a href="{{ URL::previous() }}"><button type="button" class="btn btn-warning text-white"><< Atrás</button></a></p>
        </div>
        <div class="row mb-4 ">
            <div class="col-sm-4 mb-3 pb-5"></div>
            <div class="col-sm-4 p-3  mb-5 pb-5 text-center">

                <h3 class="text-center mt-5 mb-5 text-info">FORMULARIO DEL PEDIDO</h3>
                <form action="{{ action('PedidoController@finalizarPedido', ['id' => $producto->id , 'unidades' => $unidades]) }}" method="POST"  enctype="multipart/form-data" style="height: 600px">
                    {{csrf_field()}}


                        <div class="form-row">
                            <div class="form-group col-md-12 ">
                            <h5 class="text-secondary">Total unidades: {{$unidades}} </h5>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 mb-5">
                            <h5 class="text-secondary">Precio total: {{$total}} €</h5>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 mb-5">
                                <label for="nombre">{{ __('Número tarjeta:') }}</label>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <input type="number" maxlength="4" style="width:90%" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />

                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" maxlength="4" style="width:90%" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" maxlength="4" style="width:90%" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />

                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" maxlength="4" style="width:90%" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
                            </div>
                        </div>
                        <div class="form-row mt-5">
                            <div class="form-group col-md-4">
                            </div>
                            <div class="form-group col-md-4"><button type="submit" name="submit" class="btn btn-info">Comprar Producto</button>
                            </div>
                            <div class="form-group col-md-4">
                        </div>


                    </form>
            </div>

    </div>
    @include('includes.footer')
</body>
</html>
