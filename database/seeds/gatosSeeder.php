<?php

use Illuminate\Database\Seeder;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;     //tres clases importadas para trabajar con imágenes
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Middleware\Authenticate;
use App\Gato;

class gatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


            DB::table('gatos')->insert(array(
                array(
                'usuarioId' => 1,
                'nombre' => 'Thor',
                 'edad'  => '3 años',
                'raza'  => 'siames',
                'sexo' => 'macho',
                'colores' => 'marrón',
                'descripcion'  => 'gatete mu bonico',
                'imagen' => '1590749654thor.jpg',
                'castrado' => 'si',
                'estado' => 'Perdido',
                'direccion'=>'calle prim 20',
                'localidad'=>'cádiz',
                'provincia'=>'cadiz',


                ),
            array(
                'usuarioId' => 1,
                'nombre' => 'Caty',
                 'edad'  => '4 años',
                'raza'  => 'común eropeo',
                'sexo' => 'hembra',
                'colores' => 'gris y blanca',
                'descripcion'  => 'Gata tímida',
                'imagen' => '1591341981thor y caty.jpg',
                'castrado' => 'si',
                'estado' => 'Encontrado',
                'direccion'=>'calle prim 20',
                'localidad'=>'cádiz',
                'provincia'=>'cadiz',

            )
            ));




        }

}
