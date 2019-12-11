<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Questao extends Model
{

    protected $fillable = [
        'enunciado', 'disciplina_id'
    ];


}
