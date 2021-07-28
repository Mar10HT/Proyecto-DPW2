<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_torre');
            $table->unsignedBigInteger('id_error');
            $table->date('fecha');
            $table->string('comentarios',200);
            $table->timestamps();
            $table->foreign('id_torre')->references('id')->on('torres');
            $table->foreign('id_error')->references('id')->on('errores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reportes');
    }
}