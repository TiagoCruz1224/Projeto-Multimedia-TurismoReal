<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class About extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = [
        'section_title',
        'section_content'
    ];

    protected $table = 'about_texts';

    protected $fillable = [
        'section_title',
        'section_content'
    ];
}
