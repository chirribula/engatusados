<?php

namespace App\Http\Controllers;
use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function insertarCategoria(){
        return view('Categoria.insertarCategoria');
    }


    public function save(Request $request){
        $categoria = new Categoria();
        $categoria->nombre = $request->input('nombre');
        $categoria->nombre = strtoupper($categoria->nombre);
        $categoria->save();
        return redirect()->action("ProductoController@verProductos")->with('status', $categoria->nombre.' insertada correctamente');
    }
}
