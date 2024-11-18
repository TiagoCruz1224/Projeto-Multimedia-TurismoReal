<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Roteiro extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = [
        'titulo',
        'texto',
		'imagem',
    ];

    protected $table = 'roteiro';

    protected $fillable = [
        'titulo',
        'texto',
		'imagem',
    ];
}
