<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosIdentificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculosidentificaciones', function (Blueprint $table) {

            $table->engine = "InnoDB"; //borrado de cascada
            $table->bigIncrements('id');
            $table->bigInteger('id_identificador')->unsigned();
            $table->bigInteger('id_vehiculo')->unsigned();
            $table->date('fecha_inspeccion');
            $table->string('kminspeccion');
            $table->integer('presion');
            $table->string('estado');
            $table->string('accesibilidad');
            $table->string('observacion');

            //la colmna categoria_id,hace referencia a la columna 'id', de la tabla categoria, para que sea la foranea...
            //onDelete('cascade'), sirve para el  borrado, cuando se elimine un libro, se elimina con toda su categoria.
            $table->foreign('id_identificador')->references('id')->on('identificadores')->onDelete("cascade");
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
        Schema::dropIfExists('vehiculos_identificaciones');
    }
}
