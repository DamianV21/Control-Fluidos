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
        Schema::create('calidad_aguas', function (Blueprint $table) {
            $table->id();
            $table->string('origen_agua');
            $table->double('dureza');
            $table->double('ph');
            $table->double('conductividad');
            $table->double('cloruros');
            $table->double('sulfatos');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('area_id');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
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
        Schema::dropIfExists('calidad_aguas');
    }
};
