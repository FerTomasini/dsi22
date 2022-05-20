<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'nome' => 'Bota',
            'descricao' => 'Bota preta PVC',
            'preco' => 120.00,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Casaco',
            'descricao' => 'Um casaco de lã',
            'preco' => 129.9,
        ]);
    }
}
