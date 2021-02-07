<?php

namespace Database\Seeders;

use Illuminate\support\Facades\DB;
use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libro = [
            [
                'ISBN' => '00226',
                'titulo' => 'El Arte De Venderse',
                'precio' => '65000',
                'editorial_fk' => 1
            
            ],

            [
                'ISBN' => '11256',
                'titulo' => 'Dulce Compañía',
                'precio' => '35000',
                'editorial_fk' => 1
            ],

            [
                'ISBN' => '25896',
                'titulo' => 'Química Analítica Skoog West',
                'precio' => '54000',
                'editorial_fk' => 2
            ],

            [
                'ISBN' => '22553',
                'titulo' => 'Proyecto Saberes Ciencias 9',
                'precio' => '4000',
                'editorial_fk' => 5
            ],

            [
                'ISBN' => '11445',
                'titulo' => 'Las Aventuras De Don Quijote',
                'precio' => '40000',
                'editorial_fk' => 5
            ]
        ];
        DB::table('libro')->insert($libro);
    }
}