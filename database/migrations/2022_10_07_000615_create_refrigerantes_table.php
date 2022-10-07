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
        Schema::create('refrigerantes', function (Blueprint $table) {
            $table->id();
            $table->double('concentracion_inicial');
            $table->double('volumen_inicial');
            $table->double('litros_recarga');
            $table->double('concentracion_recarga');
            $table->double('concentracion_final');
            $table->double('ph');
            $table->string('aroma');
            $table->string('aceites_entrampados');
            $table->string('color');
            $table->string('exceso_espuma');
            $table->text('comentarios');
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
        Schema::dropIfExists('refrigerantes');
    }
};
