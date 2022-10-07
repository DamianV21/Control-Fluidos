<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aceites', function (Blueprint $table) {
            $table->id();
            $table->string('aspecto');
            $table->string('color');
            $table->string('aroma');
            $table->double('litros_recarga');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('maquina_id');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('maquina_id')->references('id')->on('machines')->onDelete('cascade');
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
        Schema::dropIfExists('aceites');
    }
};
