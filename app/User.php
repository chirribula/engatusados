<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rol', 'nombre', 'apellidos', 'usuario', 'direccion', 'localidad', 'provincia', 'telefono', 'fecha', 'email', 'password',
    ];

    //Relación One To Many / de uno a muchos

    public function gatos(){
        return $this->hasMany('App\Gato')->orderBy('id','desc');
    }

    public function pedidos(){
        return $this->hasMany('App\Pedido')->orderBy('id','desc');
    }



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
