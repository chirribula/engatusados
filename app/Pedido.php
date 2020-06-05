<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pedido extends Model
{
    protected $table = 'pedidos';

    protected $fillable = [
        'usuarioId', 'productoId', 'unidades', 'total', 'fecha'
    ];

    //Relación muchos a uno

    public function user(){
        return $this->belongsTo('App\User', 'usuarioId');  //usuarioId es la clave foránea en la tabla gatos
    }

    public function producto(){
        return $this->belongsTo('App\Producto', 'productoId');  //usuarioId es la clave foránea en la tabla gatos
    }


}
