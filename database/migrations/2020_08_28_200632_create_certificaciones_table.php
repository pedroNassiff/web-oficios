<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificaciones', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('prestador_id')->unsigned();
            $table->string('titulo');
            $table->string('institucion');
            $table->string('img_certificacion')->nullable();
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('prestador_id')->references('id')->on('prestador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificaciones');
    }
}
