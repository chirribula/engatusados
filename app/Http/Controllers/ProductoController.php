<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Categoria;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;     //tres clases importadas para trabajar con imágenes
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Middleware\Authenticate;


class ProductoController extends Controller
{
    public function verProductos(){
        $productos=DB::table('productos')->paginate(4);
        $categorias=Categoria::all();
        return view('Producto.productos',['productos'=>$productos, 'categorias'=>$categorias]);

    }

    public function insertarProducto(){
        $categorias=Categoria::all();
        return view('Producto.insertarProducto',['categorias'=>$categorias]);
    }

    public function getImage($filename){
        $file = Storage::disk('productos')->get($filename);             //necesario para que se muestre la imagen, crear discos virtuales y añadir en archivo gilesystems
        return new Response($file,200);
    }

    public function getShow($id){
        $producto=Producto::findOrFail($id);
        return view('Producto.verUnProducto',['producto'=>$producto]);
    }

    public function eliminarProducto($id){
        $producto = Producto::find($id);
        Storage::disk('productos')->delete($producto->imagen);      //no funciona
        $producto->delete();
        return redirect()->action('ProductoController@verProductos')->with('status' , 'Producto borrado correctamente');
    }

    public function editarProducto($id){
        $categorias=Categoria::all();
        $producto = Producto::findOrFail($id);
        return view('Producto.editarProducto',["producto"=>$producto , 'categorias'=>$categorias]);
    }

    public function save(Request $request){
        $producto = new Producto();
        $producto->nombre = $request->input('nombre');
        $producto->nombre = strtoupper($producto->nombre);                       //para que se guarde en mayúsculas
        $producto->marca = $request->input('marca');
        $producto->precio = $request->input('precio');
        $producto->categoria = $request->get('categoria');                        //cambiar a get cuando usamos un select en formulario
        $producto->stock = $request->input('stock');
        $producto->descripcion = $request->input('descripcion');
        $producto->tamaño = $request->input('tamaño');

        $image_path = $request->file('imagen');                                  // Subir la imagen
        if($image_path){
            // Poner nombre único
            $image_path_name = time().$image_path->getClientOriginalName();

            // Guardar en la carpeta storage (storage/app/users)
            Storage::disk('productos')->put($image_path_name, File::get($image_path));

            // Seteo el nombre de la imagen en el objeto
            $producto->imagen = $image_path_name;                               // aquí se almacena en el atributo imagen
        }

        $producto->save();
        return redirect()->action("ProductoController@verProductos")->with('status', $producto->nombre.' insertado correctamente');
    }

    public function update(Request $request,$id){
        $producto = Producto::find($id);
        $producto->nombre = $request->input('nombre');
        $producto->nombre = strtoupper($producto->nombre);                       //para que se guarde en mayúsculas
        $producto->marca = $request->input('marca');
        $producto->precio = $request->input('precio');
        $producto->categoria = $request->get('categoria');                        //cambiar a get cuando usamos un select en formulario
        $producto->stock = $request->input('stock');
        $producto->descripcion = $request->input('descripcion');
        $producto->tamaño = $request->input('tamaño');


        $image_path = $request->file('imagen');                                  // Subir la imagen
        if($image_path){
            // Poner nombre único
            $image_path_name = time().$image_path->getClientOriginalName();

            // Guardar en la carpeta storage (storage/app/users)
            Storage::disk('productos')->put($image_path_name, File::get($image_path));

            // Seteo el nombre de la imagen en el objeto
            $producto->imagen = $image_path_name;                               // aquí se almacena en el atributo imagen
        }

        $producto->save();
        return redirect()->action("ProductoController@getShow", ["id"=>$id])->with('status', $producto->actualizado.' insertado correctamente');
    }


}
