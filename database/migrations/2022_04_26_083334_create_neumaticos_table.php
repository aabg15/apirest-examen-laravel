<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNeumaticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('neumaticos', function (Blueprint $table) {

            $table->engine = "InnoDB"; //borrado de cascada
            $table->bigIncrements('id');
            $table->bigInteger('id_vehiculo')->unsigned();
            $table->integer('posicion');
            $table->string('interior');

            $table->foreign('id_vehiculo')->references('id')->on('vehiculos')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('neumaticos');
    }
}
