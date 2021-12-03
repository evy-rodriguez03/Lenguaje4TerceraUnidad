<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaestrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestros', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('nombres',100);
            $table->string('apellidos',100);
            $table->string('numero_identidad',16);
            $table->date('fecha_nac');
            $table->string('telefono',50);
            $table->text('direccion');
            $table->string('especialidad',150);
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
        Schema::dropIfExists('maestros');
    }
}
