<?php

use Illuminate\Database\Seeder;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;     //tres clases importadas para trabajar con imágenes
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Middleware\Authenticate;
use App\User;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('users')->insert(array
            (array(
                'rol' => 'admin',
                'nombre' => 'Verónica',
                'apellidos' => 'Toro Gómez',
                 'usuario'  => 'chirribula',
                'direccion'  => 'C/plata',
                'localidad' => 'San Fernando',
                'provincia' => 'Cádiz',
                'telefono'  => '652365214',
                'fecha' => '1981-10-14',
                'email' => 'chirribula@hotmail.com',
                'password' => bcrypt('Ernestito07'),    //PARA GUARDAR LA CONTRASEÑA ENCRIPTADA
            ),
                array(
                    'rol' => 'user',
                'nombre' => 'Pepe',
                'apellidos' => 'Sánchez Gómez',
                 'usuario'  => 'pepito',
                'direccion'  => 'C/plata',
                'localidad' => 'San Fernando',
                'provincia' => 'Cádiz',
                'telefono'  => '652365214',
                'fecha' => '1981-10-14',
                'email' => 'pepe@pepe.com',
                'password' => bcrypt('Ernestito07'),    //PARA GUARDAR LA CONTRASEÑA ENCRIPTADA

            ))
        );
        }
    }

