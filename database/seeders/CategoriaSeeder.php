<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos = [
            [
                'descripcion_cat'=> 'Anchetas',
            ],
    
            [
                'descripcion_cat'=> 'Chocolates',
            ],

            [
                'descripcion_cat'=> 'Desayunos Sorpresa',
            ],
            
            [
                'descripcion_cat'=> 'Flores',
            ] ,

            [
                'descripcion_cat'=> 'Meriendas Sorpresa',
            ],
            
        ];
        DB::table('categoria')->insert($tipos);
    }
}
