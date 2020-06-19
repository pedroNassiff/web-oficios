<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesionales', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('localidad_id')->unsigned();
            $table->bigInteger('rubro_id')->unsigned();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('dni');
            $table->string('direccion');
            $table->string('ubicacion_actual');
            $table->string('telefono');
            $table->string('web');
            $table->boolean('certificado')->default(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('localidad_id')->references('id')->on('localidades');
            $table->foreign('rubro_id')->references('id')->on('rubros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesionales');
    }
}
