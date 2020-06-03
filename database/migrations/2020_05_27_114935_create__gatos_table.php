<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Gatos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('usuarioId');   //clave foránea de la tabla usuario
            $table->string('nombre',100);
            $table->string('edad',100);
            $table->string('raza',100);
            $table->string('sexo',100);
            $table->string('colores',200);
            $table->string('descripcion',500);
            $table->string('imagen',500);
            $table->string('castrado',100);               //por defecto no está castrado
            $table->string('estado',100);
            $table->string('direccion',100);
            $table->string('localidad',100);
            $table->string('provincia',100);
            $table->foreign('usuarioId')->references('id')->on('users');
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
        Schema::dropIfExists('Gatos');
    }
}
