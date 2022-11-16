<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PilotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pilots')->insert([
            'nombre' => Str::random(10),
            //'fecha_nacimiento' => Str::(),
            'numero_licencia' => Str::random_int(6),
            'victorias' => Str::random_int(1),
            'escuderia_id' => Str::random_int(4)
        ]);
    }
}
