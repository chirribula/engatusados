<?php

namespace App\Http\Controllers;
use App\Gato;
use App\User;                               //importo el modelo de Gato
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;     //tres clases importadas para trabajar con imágenes
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Middleware\Authenticate;

class GatoController extends Controller
{
    /*
    public function __construct() {
        $this->middleware('auth');
    }
    */

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
        $usuario=DB::table('users')
            ->join('gatos','gatos.usuarioId','=','users.id')
            ->select('users.telefono','users.email','users.usuario')
            ->where('gatos.id', '=', $id)
            ->first();
        return view('Gato.verUnGato',['gato'=>$gato, 'usuario'=>$usuario]);


    }

    public function editarGato($id){
        $gato = Gato::findOrFail($id);
        return view('Gato.editarGato',["gato"=>$gato]);
    }

    public function insertarGato(){
        return view('Gato.insertarGato');
    }

    public function verGatos(){
        $encontrados=Gato::all()
        ->where('estado', '=', 'Encontrado');
        //$encontrados->paginate(5);

        $perdidos=Gato::all()
        ->where('estado', '=', 'Perdido');
        //$perdidos->paginate(5);

        $adopciones=Gato::all()
        ->where('estado', '=', 'Adopción');
        //$adopciones->paginate(5);

        $cont=0;                                    //paginate para que haga la paginación a partir de 4, añadir a la vista links
        return view('Gato.gatos',[ 'cont'=>$cont , 'perdidos'=>$perdidos  , 'adopciones'=>$adopciones, 'encontrados'=>$encontrados]);
    }

    public function getImage($filename){
        $file = Storage::disk('gatos')->get($filename);             //necesario para que se muestre la imagen, crear discos virtuales y añadir en archivo gilesystems
        return new Response($file,500);
    }

    public function updateGato(Request $request,$id){
        $gato = Gato::find($id);
        $gato->nombre = $request->input('nombre');
        $gato->nombre = strtoupper($gato->nombre);
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
        return redirect()->action("GatoController@getShow",$gato->id)->with('status', $gato->nombre. ' actualizado correctamente');
    }

        public function borrarGato($id){
            $gato = Gato::findOrFail($id);
            $gato->delete();
            return redirect()->action('GatoController@verGatos')->with('status' , $gato->nombre .' borrado correctamente');
        }




    public function save(Request $request){
        $gato = new Gato();
        $gato->nombre = $request->input('nombre');
        $gato->nombre = strtoupper($gato->nombre);                  //para que se gurade en mayúsculas
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
        return redirect()->action("GatoController@getShow",$gato->id)->with('status', $gato->nombre. ' creado correctamente');
    }

    }

