<?php

namespace App\Http\Controllers;
use App\Gato;                               //importo el modelo de Gato
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;     //tres clases importadas para trabajar con imágenes
use Illuminate\Support\Facades\File;


class GatoController extends Controller
{

    public function index(){
        return view('index');
    }

    public function mostrarPerdidos(){
        $gatos=Gato::all();
        return view('Gato.perdidos',['gatos'=>$gatos]);

    }

    public function mostrarEncontrados(){
        $gatos=Gato::all();
        return view('Gato.encontrados',['gatos'=>$gatos]);

    }

    public function mostrarAdopcion(){
        $gatos=Gato::all();
        return view('Gato.adopcion',['gatos'=>$gatos]);

    }

    public function getShow($id){
        $gato=Gato::findOrFail($id);
        return view('Gato.show',['gato'=>$gato]);
    }

    public function insertarGato(){
        return view('Gato.insertarGato');
    }

    public function verGatos(){
        $gatos=Gato::all();
        return view('Gato.gatos',['gatos'=>$gatos]);
    }

    }

