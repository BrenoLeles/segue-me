<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcao extends Model
{
    protected $fillable = [
        'nome',
        'equipe_id'
    ];
}
