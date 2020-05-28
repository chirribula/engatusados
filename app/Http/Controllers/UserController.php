<?php

namespace App\Http\Controllers;
use App\User;                            //importo el modelo de User
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;     //tres clases importadas para trabajar con imágenes
use Illuminate\Support\Facades\File;


class UserController extends Controller
{

    public function __construct() {
        $this->middleware('auth');          //impide accesos indebidos en las rutas
    }

    public function update(){
        $user=Auth::user();                 //para obtener la id del usuario
    }



}
