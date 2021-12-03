<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->integer('id_alumnos')->unsigned();
            $table->integer('id_grado')->unsigned();
            $table->smallInteger('anio');
            $table->string('jornada',50);
            $table->smallInteger('grupo');
            $table->timestamps();
            $table->foreign('id_alumnos')->references('id')->on('alumnos');
            $table->foreign('id_grado')->references('numero_aula')->on('grados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matriculas');
    }
}
