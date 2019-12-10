<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respostas extends Model
{
    protected $fillable = [
        'enunciado', 'valor', 'detalhes', ''
    ];
}
