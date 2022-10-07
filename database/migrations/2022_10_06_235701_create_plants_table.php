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
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('codigopostal');
            $table->string('telefono');
            $table->unsignedBigInteger('empresa_id');
            $table->unsignedBigInteger('contacto_id');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('supervisor_id');
            $table->unsignedBigInteger('created_by');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('contacto_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('empresa_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('supervisor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('plants');
    }
};
