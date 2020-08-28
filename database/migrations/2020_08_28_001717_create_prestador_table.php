<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestador', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('oficio_id')->unsigned();
            
            $table->string('descripcion');

            $table->string('dni');
            $table->string('telefono');
            $table->string('web')->nullable();

            $table->string('matricula')->nullable();
            $table->boolean('matriculado')->default(false);
           
            $table->boolean('habilitado')->default(false);

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('oficio_id')->references('id')->on('oficio');

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
        Schema::dropIfExists('prestador');
    }
}
