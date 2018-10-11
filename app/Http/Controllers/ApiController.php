<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function jsonPessoas()
    {
        $Pessoas = \App\Personagens::with('filmes')->get();

        foreach ($Pessoas as $Pessoa) {
            echo $Pessoa;

            $PessoasJson[] = $Pessoa;
        }
        return  response()->json($PessoasJson);
    }

    public function datatablePessoas()
    {
        $Pessoas = \App\Personagens::with('filmes')->get();

        foreach ($Pessoas as $Pessoa) {
            echo $Pessoa;

            $PessoasJson[] = $Pessoa;
        }
        return view('pessoas',compact('PessoasJson'));
    }
}
