<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
        'nombre'
    ];

   //Relación One To Many / de uno a muchos

    public function productos(){
        return $this->hasMany('App\Producto')->orderBy('id','desc');
    }

}
