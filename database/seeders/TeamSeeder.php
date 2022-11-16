<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('teams')->insert([
            'nombre' => 'RedFire',
            'num_pilotos' => '10',
            'sobre_presupuesto' => true,
            
        ]);
        DB::table('teams')->insert([
            'nombre' => 'blueMountain',
            'num_pilotos' => '3',
            'sobre_presupuesto' => true,
            
        ]);
    }
}
