<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionario_Questao extends Model
{
    protected $fillable = [
        'questao_id', 'questionario_id'
    ];
}
