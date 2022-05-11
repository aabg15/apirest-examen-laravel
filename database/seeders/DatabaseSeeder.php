<?php

namespace Database\Seeders;

use App\Models\VehiculosInspecciones;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(IdentificadoresSeeder::class);
        $this->call(InspeccionesSeeder::class);
        $this->call(VehiculosSeeder::class);
        $this->call(NeumaticosSeeder::class);
        $this->call(VehiculosIdentificadores::class);
        $this->call(VehiculosInspeccionesSeeder::class);
    }
}
