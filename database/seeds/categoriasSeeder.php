<?php

use Illuminate\Database\Seeder;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;     //tres clases importadas para trabajar con imágenes
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Middleware\Authenticate;
use App\Categoria;


class categoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(array(
            array(
            'nombre' => 'COMIDA',
            ),
            array(
            'nombre' => 'JUGUETES',
            ),
            array(
            'nombre' => 'CORREAS',
            ),
        ));
    }
}
