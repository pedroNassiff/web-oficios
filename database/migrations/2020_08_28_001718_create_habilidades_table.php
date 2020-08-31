<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabilidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilidades', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('prestador_id')->unsigned();
            $table->bigInteger('oficio_id')->unsigned();
            $table->bigInteger('especialidad_id')->unsigned()->nullable();

            $table->foreign('prestador_id')->references('id')->on('prestador')->onDelete('cascade');
            $table->foreign('oficio_id')->references('id')->on('oficio');
            $table->foreign('especialidad_id')->references('id')->on('especialidad');
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
        Schema::dropIfExists('habilidades');
    }
}
