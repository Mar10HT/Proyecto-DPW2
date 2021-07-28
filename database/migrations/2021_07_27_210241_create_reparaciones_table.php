<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReparacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_reporte');
            $table->unsignedBigInteger('id_solucion');
            $table->unsignedBigInteger('id_ing');
            $table->date('fecha_reparacion');
            $table->string('comentario',200);
            $table->timestamps();
            $table->foreign('id_reporte')->references('id')->on('reportes');
            $table->foreign('id_solucion')->references('id')->on('soluciones');
            $table->foreign('id_ing')->references('id')->on('ingenieros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reparaciones');
    }
}