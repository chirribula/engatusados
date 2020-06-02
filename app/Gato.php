<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Gato extends Model
{
    protected $table = 'gatos';

    protected $fillable = [
        'usuarioId', 'nombre', 'edad', 'raza', 'sexo', 'colores', 'descripcion', 'imagen', 'castrado', 'estado', 'direccion', 'localidad', 'provincia'
    ];

    //Relación muchos a uno

    public function user(){
        return $this->belongsTo('App\User', 'usuarioId');  //usuarioId es la clave foránea en la tabla gatos
    }

}
