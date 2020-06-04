<?php

namespace App\Http\Controllers;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class CategoriaController extends Controller
{
    public function insertarCategoria(){
        return view('Categoria.insertarCategoria');
    }


    public function save(Request $request){            //cambio metodo request por categoriaRequest y lo importo arriba


        $validate = $this->validate($request, [
            'nombre' => 'required|unique:categorias,nombre',
        ]);

        $categoria = new Categoria();
        $categoria->nombre = $request->input('nombre');
        $categoria->nombre = strtoupper($categoria->nombre);
        $categoria->save();
        return redirect()->action("ProductoController@verProductos")->with('status', 'Categoria '.$categoria->nombre.' insertada correctamente');
    }
}
