<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rol')->default('user');               //por defecto no es administrador
            $table->string('nombre',100);
            $table->string('apellidos',100);
            $table->string('usuario',100)->unique();
            $table->string('direccion',100);
            $table->string('localidad',100);
            $table->string('provincia',100);
            $table->string('telefono',100);
            $table->date('fecha');
            $table->string('email',30)->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
