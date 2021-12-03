<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeccionesAbiertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secciones_abiertas', function (Blueprint $table) {
            $table->integer('id_maestros')->unsigned();
            $table->integer('id_grado')->unsigned();
            $table->date('fecha');
            $table->foreign('id_maestros')->references('id')->on('maestros');
            $table->foreign('id_grado')->references('numero_aula')->on('grados');
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
        Schema::dropIfExists('secciones_abiertas');
    }
}
