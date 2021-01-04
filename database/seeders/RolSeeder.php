<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'descripcion_rol'=> 'Administrador',
            ],
    
            [
                'descripcion_rol'=> 'Vendedor',
            ],

            [
                'descripcion_rol'=> 'Cliente',
            ],
            
            
        ];
        DB::table('rol')->insert($roles);
        
    }
}
