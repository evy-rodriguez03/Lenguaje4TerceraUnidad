<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('nombres',100);
            $table->string('apellidos',100);
            $table->integer('edad');
            $table->string('numero_identidad',16);
            $table->string('telefono',50);
            $table->text('direccion');
            $table->string('nombre_padre',150);
            $table->string('nombre_madre',150);
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
        Schema::dropIfExists('alumnos');
    }
}
