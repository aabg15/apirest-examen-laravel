<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InspeccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('inspecciones')->insert([
        	[
	        	'nombre' => 'Inspeccion carro rojo-verde',
            ],
            [
	        	'nombre' => 'Inspeccion carro amarillo',
        	]
        ]);
    }
}
