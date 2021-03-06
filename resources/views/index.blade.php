<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>ENGATUSADOS</title>
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    <link href="https://fonts.googleapis.com/css?family=Lora|Solway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/423fa98c0f.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{!! url('img/IconoGato2.png') !!}">
</head>
<body>

    @include('includes.header')
        <div class="container-fluid mb-5">
            <div class="row mt-2 mb-5">
                <div class="col-lg-1"></div>
                <div class="col-lg-4 mt-5">
                    <h2 class="mt-5">¿Qué es engatusados? </h2>
                    <p class="mt-5">Engatusados es una web pensada y creada por una amante de los gatos, para intentar ayudar a
                        estos adorables animales por si se pierden, se encuentran o simplemente quieres adoptar.
                    </p>
                    <p class="mt-5">También tiene una parte tienda, donde todo lo recaudado un porcentaje de las las ventas, irá destinado
                        a colaborar con protectoras de la zona y cuidadoras que lo necesite.
                    </p>

                    <p class="mt-5">No lo pienses más y pon un gato en tu vida!!  <i class="fas fa-cat"></i></p>

                </div>
                <div class="col-lg-1"></div>

                <div class="col-lg-5 mt-5 mb-5" >

                    <img src="img/thorYCaty.jpg" width="1200px" alt="Fruteria" class="img-fluid rounded mx-auto d-block">

                </div>


            </div>
        </div>

    @include('includes.footer')

</body>
</html>
