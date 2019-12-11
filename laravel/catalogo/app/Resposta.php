<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respostas extends Model
{
    protected $fillable = [
        'rCerta',
        'questao_id',
        'user_id',
        'respostaUsu'

    ];
}
