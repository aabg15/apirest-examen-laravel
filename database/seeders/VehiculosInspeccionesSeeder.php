<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculosInspeccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vehiculosinpecciones')->insert([
        	[
	        	'id_inspeccion' => '1',
	        	'id_vehiculo' => '1'
        	],

            [
	        	'id_inspeccion' => '2',
	        	'id_vehiculo' => '2'
        	],


        ]);
    }
}
