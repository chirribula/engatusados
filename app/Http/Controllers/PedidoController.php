<?php

namespace App\Http\Controllers;
use App\Producto;
use App\Pedido;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;     //tres clases importadas para trabajar con imágenes
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Middleware\Authenticate;

class PedidoController extends Controller
{
    public function finalizarPedido(Request $request, $id, $unidades){
        $producto=Producto::find($id);
        $total=$unidades*$producto->precio;
        $nuevoStock=$producto->stock-$unidades;
        DB::table('productos')->where('id',$id)      //para restar las unidades a la tabla
        ->update([
            'stock'=>$nuevoStock
        ]);

        $pedido=new Pedido();
        $pedido->usuarioId = $id;
        $pedido->productoId = $producto->id;
        $pedido->unidades = $unidades;
        $pedido->total = $total;
        $pedido->save();

        return redirect()->action('ProductoController@verProductos')->with('status2' , 'La compra de '. $unidades. ' de '.$producto->nombre.' por un importe de  ' . $total.'€ se ha realizado correctamente' );


    }
}
