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
        Schema::create('machines', function (Blueprint $table) {
            $table->id();
            $table->string('ids');
            $table->string('marca');
            $table->string('tipo');
            $table->string('a_g_guias');
            $table->string('a_hidraulico');
            $table->string('r_a_directo');
            $table->string('producto');
            $table->double('capacidad_tanque');
            $table->double('reco_min');
            $table->double('reco_max');
            $table->double('fac_refractor');
            $table->double('rango_ph');
            $table->double('rango_ph_min');
            $table->date('carga_ini');
            $table->integer('mantenimiento');
            $table->unsignedBigInteger('empresa_id');
            $table->unsignedBigInteger('planta_id');
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('linea_id');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('supervisor_id');
            $table->unsignedBigInteger('created_by');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('linea_id')->references('id')->on('lines')->onDelete('cascade');
            $table->foreign('planta_id')->references('id')->on('plants')->onDelete('cascade');
            $table->foreign('empresa_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
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
        Schema::dropIfExists('machines');
    }
};
