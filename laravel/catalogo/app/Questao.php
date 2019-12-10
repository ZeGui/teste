<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Questao extends Model
{

    protected $fillable = [
        'enunciado', 'respostaCerta', 'disciplina_id'
    ];

}
