<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Personagens;
use App\Filmes;

class api extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api:crawl';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $dom = file_get_contents('https://ghibliapi.herokuapp.com/people/');
        $data = json_decode($dom, TRUE);
        $personagens = array();

        foreach ($data as $key => $value) {
            $personagem['id_api'] = $value['id'];
            $personagem['name_personagem'] = $value['name'];
            $personagem['genero'] = $value['gender'];
            $personagem['idade'] = $value['age'];
            $personagem['olhos'] = $value['eye_color'];
            $personagem['cabelos'] = $value['hair_color'];
            $personagem['id_filme'] = str_replace("https://ghibliapi.herokuapp.com/films/", "", implode($value['films']));

            $personagens[] = $personagem;
        }


        $dom = file_get_contents('https://ghibliapi.herokuapp.com/films/');
        $data = json_decode($dom, TRUE);
        $Filmes = array();

        foreach ($data as $key => $value) {
            $Filme['id_api'] = $value['id'];
            $Filme['titulo'] = $value['title'];
            $Filme['descricao'] = $value['description'];
            $Filme['diretor'] = $value['director'];
            $Filme['produtor'] = $value['producer'];
            $Filme['ano_lancamento'] = $value['release_date'];
            $Filme['pontuacao'] = $value['rt_score'];

            $Filmes[] = $Filme;
        }

        foreach ($personagens as $key => $value) {
            Personagens::create($value);
        }

        foreach ($Filmes as $key => $value) {
            Filmes::create($value);
        }

    }
}
