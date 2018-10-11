<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
    protected $fillable = [
        'id_api',
        'titulo',
        'descricao',
        'diretor',
        'produtor',
        'ano_lancamento',
        'pontuacao',
    ];
    protected $hidden = [
        'id',
        'id_api', 
        'descricao',
        'diretor',
        'produtor',
        'created_at',
        'updated_at',
    ];
}
