<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personagens extends Model
{
    protected $fillable = [
        'id_api',
        'name_personagem',
        'genero',
        'idade',
        'olhos',
        'cabelos',
        'id_filme',
    ];

    protected $hidden = [
    'id',
    'id_api', 
    'genero',
    'olhos',
    'cabelos',
    'id_filme',
    'created_at',
    'updated_at',
];

    public function filmes()
   {
       return $this->belongsTo('App\Filmes','id_filme', 'id_api');
   }
}
