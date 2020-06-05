<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = [
        'nombre', 'marca', 'precio', 'categoria', 'stock', 'descripcion', 'tamaño', 'imagen'
    ];

     //Relación muchos a uno

     public function categoria(){
        return $this->belongsTo('App\Categoria', 'categoria');  //usuarioId es la clave foránea en la tabla gatos
    }

    public function pedidos(){
        return $this->hasMany('App\Pedidos')->orderBy('id','desc');
    }

}
