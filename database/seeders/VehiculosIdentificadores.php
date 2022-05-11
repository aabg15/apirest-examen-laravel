<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculosIdentificadores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vehiculosidentificaciones')->insert([
            [
                'id_identificador' => '1',
                'id_vehiculo' => '1',
                'fecha_inspeccion' => '2022-04-26',
                'kminspeccion' => '15',
                'presion' => 7,
                'estado' => 'Ok',
                'accesibilidad' => 'Si',
                'observacion' => 'Todo ok'
            ],
            [
                'id_identificador' => '2',
                'id_vehiculo' => '2',
                'fecha_inspeccion' => '2022-04-22',
                'kminspeccion' => '20',
                'presion' => 4,
                'estado' => 'Ok',
                'accesibilidad' => 'Si',
                'observacion' => 'Todo ok'
            ],

        ]);
    }
}
