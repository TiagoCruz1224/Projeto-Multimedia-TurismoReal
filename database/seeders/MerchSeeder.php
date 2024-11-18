<?php

namespace Database\Seeders;

use App\Models\Merch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MerchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Merch::create([
            "nome" => 'Básica 1',
            "descricao" => 'Contacte o suporte',
            'preco' => '9.99',
            "imagem" => '\images\merch_2.png',
        ]);

        Merch::create([
            "nome" => 'Básica 2',
            "descricao" => 'Contacte o suporte',
            'preco' => '9.99',
            "imagem" => '\images\merch_3.png',
        ]);

        Merch::create([
            "nome" => 'Pelourinho',
            "descricao" => 'Contacte o suporte',
            'preco' => '16.99',
            "imagem" => '\images\merch_1.jpg',
        ]);

        Merch::create([
            "nome" => 'Escarpas do Corgo',
            "descricao" => 'Contacte o suporte',
            'preco' => '19.99',
            "imagem" => '\images\merch_4.png',
        ]);
    }
}
