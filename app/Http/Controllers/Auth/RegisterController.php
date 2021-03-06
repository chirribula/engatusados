<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'rol' => 'user',
            'nombre' => ['required', 'string', 'max:100'],
            'apellidos' => ['required', 'string', 'max:100'],
            'usuario' => ['required', 'string', 'max:100', 'unique:users'],
            'direccion' => ['required', 'string', 'max:100'],
            'localidad' => ['required', 'string', 'max:100'],
            'provincia' => ['required', 'string', 'max:100'],
            'telefono' => ['required', 'string', 'max:100'],
            'fecha' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:30', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'rol' => 'user',
            'nombre' => $data['nombre'],
            'apellidos' => $data['apellidos'],
            'usuario' => $data['usuario'],
            'direccion' => $data['direccion'],
            'localidad' => $data['localidad'],
            'provincia' => $data['provincia'],
            'telefono' => $data['telefono'],
            'fecha' => $data['fecha'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
