<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merch extends Model
{
    use HasFactory;
	protected $fillable = [
        'nome',
        'descricao',
        'imagem',
        'preco',
	];
}
