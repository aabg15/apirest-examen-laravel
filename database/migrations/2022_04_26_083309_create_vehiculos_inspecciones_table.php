<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosInspeccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculosinpecciones', function (Blueprint $table) {

            $table->engine="InnoDB";//borrado de cascada
            $table->bigIncrements('id');
            $table->bigInteger('id_inspeccion')->unsigned();
            $table->bigInteger('id_vehiculo')->unsigned();

            //la colmna categoria_id,hace referencia a la columna 'id', de la tabla categoria, para que sea la foranea...
            //onDelete('cascade'), sirve para el  borrado, cuando se elimine un libro, se elimina con toda su categoria.
            $table->foreign('id_inspeccion')->references('id')->on('inspecciones')->onDelete("cascade");
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
        Schema::dropIfExists('vehiculos_inspecciones');
    }
}
