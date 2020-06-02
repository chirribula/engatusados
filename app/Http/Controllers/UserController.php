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
        $gatos=Gato::all();
        return view('Usuario.verUsuario',['usuario'=>$usuario],['gatos'=>$gatos]);
    }


    public function edit($id){
        $usuario = User::findOrFail($id);
        return view('Usuario.editarUsuario',["usuario"=>$usuario]);
    }

    public function update(Request $request,$id){
        $usuario = User::find($id);
        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->usuario = $request->input('usuario');
        $usuario->direccion = $request->input('direccion');
        $usuario->localidad = $request->input('localidad');
        $usuario->provincia = $request->input('provincia');
        $usuario->telefono = $request->input('telefono');
        $usuario->fecha = $request->input('fecha');
        $usuario->email = $request->input('email');
        $usuario->password = $request->input('password');
        $usuario->save();
        return redirect()->action("UserController@verUsuario",$usuario->id)->with('status', $usuario->usuario. ' actualizada correctamente');
    }



}

