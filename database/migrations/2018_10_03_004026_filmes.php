<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Filmes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('filmes', function (Blueprint $table) {
                $table->increments('id');
                $table->text('id_api');
                $table->string('titulo', 60);
                $table->text('descricao');
                $table->string('diretor', 60);
                $table->string('produtor', 30);
                $table->integer('ano_lancamento');
                $table->integer('pontuacao');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
