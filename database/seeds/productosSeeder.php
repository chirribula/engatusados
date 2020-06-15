<?php

use Illuminate\Database\Seeder;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;     //tres clases importadas para trabajar con imágenes
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Middleware\Authenticate;
use App\Producto;




class productosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(array(
        array(
            'nombre' => 'PIENSO WISKAS',
            'marca' => 'Wiskas',
            'precio' => '30.00',
             'categoria'  => 1,
            'stock'  => 200,
            'descripcion' => 'Pienso para gatitos bebe',
            'tamaño' => '15 Kg',
            'imagen'  => '1591197535pienso wiskas.jpg',

        ),
        array(
            'nombre' => 'CORREA PARA GATOS',
            'marca' => 'Gatitos',
            'precio' => '12.00',
            'categoria'  => 2,
            'stock'  => 100,
            'descripcion' => 'Correa suave para gatitos',
            'tamaño' => 'Pequeño',
            'imagen'  => '1591199725correa.jpg',

        ),
        array(
            'nombre' => 'PIENSO ULTIMA',
            'marca' => 'Ultima',
            'precio' => '25.00',
             'categoria'  => 1,
            'stock'  => 200,
            'descripcion' => 'Pienso para gatos',
            'tamaño' => '10 Kg',
            'imagen'  => '1591199839pienso uptima.jpg',

        ),
        array(
            'nombre' => 'TIOVIVO',
            'marca' => 'Gatitos',
            'precio' => '15',
             'categoria'  => 3,
            'stock'  => 80,
            'descripcion' => 'Juguete para gatitos divertido',
            'tamaño' => 'Pequeño',
            'imagen'  => '1591199951tiovivo.jpg',

        ),
    ));
    }
}
