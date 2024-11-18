<?php

// app/Models/Pagina.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pagina extends Model
{
    protected $table = 'paginas';
    protected $fillable = ['titulo', 'conteudo'];
}
