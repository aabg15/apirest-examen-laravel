<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NeumaticosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('neumaticos')->insert([
            [
                'posicion' => 1,
                'interior' => '1',
                'id_vehiculo' => '1'
            ],

            [
                'posicion' => 2,
                'interior' => '3',
                'id_vehiculo' => '2'
            ],
        ]);
    }
}
