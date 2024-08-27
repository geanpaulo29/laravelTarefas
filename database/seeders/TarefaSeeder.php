<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TarefaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tarefas')->insert([
            [
                'nome' => 'Comprar alimentos',
                'descricao' => 'Comprar frutas, legumes, pão e leite.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Estudar laravel',
                'descricao' => 'Estudar os conceitos básicos de Laravel e criar uma aplicação.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Fazer exercícios',
                'descricao' => 'Fazer uma corrida até a praça.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
