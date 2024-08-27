<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'name' => 'João Silva',
            'email' => 'jogão@example.com',
            'telefone' => '(00) 1234-5678',
            'data_nascimento' => '1990-05-15',
        ]);

        DB::table('contacts')->insert([
            'name' => 'Maria Rosa',
            'email' => 'mariazinha@example.com',
            'telefone' => '(11) 1233-4421',
            'data_nascimento' => '1992-03-03',
        ]);
    }
}
