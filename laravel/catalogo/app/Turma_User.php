<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma_User extends Model
{
    protected $fillable = [
        'turma_id', 'user_id'
    ];
}
