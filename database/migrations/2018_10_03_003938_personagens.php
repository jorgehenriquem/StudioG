<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Personagens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personagens', function (Blueprint $table) {
            $table->increments('id');
            $table->text('id_api');
            $table->string('name_personagem', 60);
            $table->string('genero', 30);
            $table->string('idade', 30);
            $table->string('olhos', 30);
            $table->string('cabelos', 30);
            $table->text('id_filme');
            $table->timestamps();

        });
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
