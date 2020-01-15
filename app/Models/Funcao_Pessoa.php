<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcao_Pessoa extends Model
{
    public $table = 'funcao_pessoas';
    protected $fillable = [
        'ano',
        'pessoa_id',
        'funcao_id'
    ];
}
