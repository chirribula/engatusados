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
        $productos=Producto::all();
        $categorias=Categoria::all();
        return view('Producto.productos',['productos'=>$productos, 'categorias'=>$categorias]);

    }
}
