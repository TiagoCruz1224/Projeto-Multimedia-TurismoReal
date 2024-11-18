<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilhete extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'imagem',
        'preco',
        'alojamento',
        'refeicoes',
        'transporte',
        'guia',
    ];
}
