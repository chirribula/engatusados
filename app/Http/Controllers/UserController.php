<?php

namespace App\Http\Controllers;
use App\Gato;
use App\User;                               //importo el modelo de Gato
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;     //tres clases importadas para trabajar con imágenes
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }



    public function verUsuario($id){
        $usuario=User::findOrFail($id);
        return view('Usuario.verUsuario',['usuario'=>$usuario]);
    }






}

