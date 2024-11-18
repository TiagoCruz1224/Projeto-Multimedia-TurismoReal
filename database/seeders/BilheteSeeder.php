<?php

namespace Database\Seeders;

use App\Models\Bilhete;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BilheteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bilhete::create([
            "nome" => 'Básico',
            "descricao" => '',
            'preco' => '70',
            "imagem" => '\images\Basico.png',
            'alojamento' => 0,
            'guia' => 1,
            'refeicoes' => 0,
            'transporte' => 1,
        ]);

        Bilhete::create([
            "nome" => 'Avançado',
            "descricao" => '',
            'preco' => '105',
            "imagem" => '\images\Completo.png',
            'alojamento' => 1,
            'guia' => 1,
            'refeicoes' => 1,
            'transporte' => 1,
        ]);

        Bilhete::create([
            "nome" => 'Personalizado',
            "descricao" => 'Contacte o suporte',
            "imagem" => '\images\Personalizado.png',
        ]);
    }
}
