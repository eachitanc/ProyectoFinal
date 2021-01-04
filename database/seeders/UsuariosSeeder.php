<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = [
            [
                'user'=> 'each',
                'pass_user' => 'each17',
                'nom_user' => 'Edwin',
                'ape_user' => 'Chitan',
                'tel_user' => '3187752355',
                'correo_user' => 'eac@gmail.com',
                'rol' => 1,
            ],
    
            
        ];
        DB::table('usuario')->insert($usuarios);
    }
}
