<?php

namespace App\Http\Controllers;
use App\Gato;
use App\User;                               //importo el modelo de Gato
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;     //tres clases importadas para trabajar con imágenes
use Illuminate\Support\Facades\File;


class GatoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


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
        return view('Gato.verUnGato',['gato'=>$gato]);
    }

    public function insertarGato(){
        return view('Gato.insertarGato');
    }

    public function verGatos(){
        $gatos=Gato::all();
        return view('Gato.gatos',['gatos'=>$gatos]);
    }

    public function getImage($filename){
        $file = Storage::disk('gatos')->get($filename);
        return new Response($file,200);
    }


    public function save(Request $request){
        $gato = new Gato();
        $gato->nombre = $request->input('nombre');
        $gato->edad = $request->input('edad');
        $gato->raza = $request->input('raza');
        $gato->sexo = $request->get('sexo');                        //cambiar a get cuando usamos un select en formulario
        $gato->colores = $request->input('colores');
        $gato->descripcion = $request->input('descripcion');
        $gato->castrado = $request->input('castrado');
        $gato->estado = $request->input('estado');
        $gato->direccion = $request->input('direccion');
        $gato->localidad = $request->input('localidad');
        $gato->provincia = $request->input('provincia');

        $gato->usuarioId = auth()->user()->id;


        $image_path = $request->file('imagen');                                  // Subir la imagen
        if($image_path){
            // Poner nombre único
            $image_path_name = time().$image_path->getClientOriginalName();

            // Guardar en la carpeta storage (storage/app/users)
            Storage::disk('gatos')->put($image_path_name, File::get($image_path));

            // Seteo el nombre de la imagen en el objeto
            $gato->imagen = $image_path_name;                               // aquí se almacena en el atributo imagen
        }

        $gato->save();
        return redirect()->action("GatoController@index")->with('status', $gato->nombre.' Gato insertado correctamente');
    }

    }

