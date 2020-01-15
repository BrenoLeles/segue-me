<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->bigInteger('equipe_id')->unsigned()->nullabel();
            $table->foreign('equipe_id')->references('id')->on('equipes');

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
        Schema::dropIfExists('funcaos');
    }
}
