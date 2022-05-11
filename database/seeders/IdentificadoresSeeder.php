<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdentificadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('identificadores')->insert([
        	[
	        	'codigo' => 'AX-DF',
            ],
            [
	        	'codigo' => 'BC-DD',
        	]
        ]);
    }
}
