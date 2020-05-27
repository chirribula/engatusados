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
            $table->unsignedBigInteger('usuarioId');                //clave foránea de la tabla usuario
            $table->string('nombre',100);
            $table->string('raza',100);
            $table->string('sexo',100);
            $table->string('colores',200);
            $table->string('descripcion',500);
            $table->string('edad',100);
            $table->string('imagen',100);
            $table->date('fecha');
            $table->boolean('castrado')->default(0);               //por defecto no está castrado
            $table->boolean('perdido')->default(0);               //por defecto no se ha perdido
            $table->boolean('encontrado')->default(0);           //por defecto no ha sido encontrado
            $table->boolean('adopcion')->default(0);            //por defecto no está en adopción
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
