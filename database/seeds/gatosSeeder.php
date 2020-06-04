<?php

use Illuminate\Database\Seeder;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;     //tres clases importadas para trabajar con imágenes
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Middleware\Authenticate;

class gatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0; $i < 5; $i++) {
            DB::table('gatos')->insert(array(
                'usuarioId' => 13,
                'nombre' => 'pepe',
                 'edad'  => '3 años',
                'raza'  => 'siames',
                'sexo' => 'macho',
                'colores' => 'marrón',
                'descripcion'  => 'gatete mu bonico',
                'imagen' => '1591186644gatitos.jpg',
                'castrado' => 'si',
                'estado' => 'Perdido',
                'direccion'=>'calle prim 20',
                'localidad'=>'cádiz',
                'provincia'=>'cadiz',
                'created_at'=>'2020-06-04 14:46:07',
                'updated_at'=>'2020-06-04 14:46:07'

            ));
        }
        for ($i=0; $i < 5; $i++) {
            DB::table('gatos')->insert(array(
                'usuarioId' => 13,
                'nombre' => 'pepe',
                 'edad'  => '3 años',
                'raza'  => 'siames',
                'sexo' => 'macho',
                'colores' => 'marrón',
                'descripcion'  => 'gatete mu bonico',
                'imagen' => '1591186644gatitos.jpg',
                'castrado' => 'si',
                'estado' => 'Encontrado',
                'direccion'=>'calle prim 20',
                'localidad'=>'cádiz',
                'provincia'=>'cadiz',
                'created_at'=>'2020-06-04 14:46:07',
                'updated_at'=>'2020-06-04 14:46:07'

            ));
        }

        for ($i=0; $i < 5; $i++) {
            DB::table('gatos')->insert(array(
                'usuarioId' => 13,
                'nombre' => 'pepe',
                 'edad'  => '3 años',
                'raza'  => 'siames',
                'sexo' => 'macho',
                'colores' => 'marrón',
                'descripcion'  => 'gatete mu bonico',
                'imagen' => '1591186644gatitos.jpg',
                'castrado' => 'si',
                'estado' => 'Adopción',
                'direccion'=>'calle prim 20',
                'localidad'=>'cádiz',
                'provincia'=>'cadiz',
                'created_at'=>'2020-06-04 14:46:07',
                'updated_at'=>'2020-06-04 14:46:07'

            ));
        }
    }
}
