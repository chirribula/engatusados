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

            ),
            array(
                'usuarioId' => 2,
                'nombre' => 'Misi',
                 'edad'  => '16 años',
                'raza'  => 'atigrada',
                'sexo' => 'hembra',
                'colores' => 'marrón y negra',
                'descripcion'  => 'Gata comilona y tranquila',
                'imagen' => '15922447582847.jpg',
                'castrado' => 'si',
                'estado' => 'Encontrado',
                'direccion'=>'calle gracias 20',
                'localidad'=>'chiclana',
                'provincia'=>'cadiz',

            ),
            array(
                'usuarioId' => 2,
                'nombre' => 'Gatito Rubio',
                 'edad'  => '6 años',
                'raza'  => 'común europeo',
                'sexo' => 'macho',
                'colores' => 'dorado y blanco',
                'descripcion'  => 'Dócil con humanos y brusco con gatos',
                'imagen' => '1592244539148.jpg',
                'castrado' => 'no',
                'estado' => 'Adopción',
                'direccion'=>'calle gracias 20',
                'localidad'=>'chiclana',
                'provincia'=>'cadiz',

            )
            ));




        }

}
