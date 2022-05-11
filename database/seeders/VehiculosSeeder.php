<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('vehiculos')->insert([
        	[
	        	'marca' => 'Port',
	        	'kmactual' => '52.5'
        	],
            [
	        	'marca' => 'Mercedes',
	        	'kmactual' => '57.5'
        	],
            [
	        	'marca' => 'Nissan',
	        	'kmactual' => '12.5'
        	],
            [
	        	'marca' => 'Toyota',
	        	'kmactual' => '45.5'
        	],
            [
	        	'marca' => 'Volvo',
	        	'kmactual' => '263.4'
        	],


        ]);
    }
}
