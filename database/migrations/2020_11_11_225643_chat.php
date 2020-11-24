<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Chat extends Migration
{
    public function up()
    {
        Schema::create('chat', function (Blueprint $table) {
            $table->id();
            $table->string("send_user_id");
            $table->string("received_user_id");
            $table->text("mensaje");
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
        Schema::dropIfExists('chat');
    }
}
