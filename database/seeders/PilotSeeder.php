<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

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
            'nombre' => 'Alberto',
           // 'fecha_nacimiento' => '04/04/87',
            'numero_licencia' => '333333',
            'victorias' => '3',
            
        ]);
        DB::table('pilots')->insert([
            'nombre' => 'Unai',
           // 'fecha_nacimiento' => '04/04/87',
            'numero_licencia' => '666',
            'victorias' => '23',
           
        ]);
        DB::table('pilots')->insert([
            'nombre' => 'Gorka',
           // 'fecha_nacimiento' => '04/04/87',
            'numero_licencia' => '777777',
            'victorias' => '1',
        
        ]);
        DB::table('pilots')->insert([
            'nombre' => 'Leire',
           // 'fecha_nacimiento' => '04/04/87',
            'numero_licencia' => '222222',
            'victorias' => '25',
         
        ]);
        DB::table('pilots')->insert([
            'nombre' => 'Josu',
           // 'fecha_nacimiento' => '04/04/87',
            'numero_licencia' => '888888',
            'victorias' => '15',
 
        ]);
    }
}
