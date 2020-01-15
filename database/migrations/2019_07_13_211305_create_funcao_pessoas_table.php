<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncaoPessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcao_pessoas', function (Blueprint $table) {
            $table->integer('ano');
            $table->bigInteger('pessoa_id')->unsigned()->nullable();
            $table->foreign('pessoa_id')->references('id')->on('pessoas');
            $table->bigInteger('funcao_id')->unsigned();
            $table->foreign('funcao_id')->references('id')->on('funcaos');
            $table->primary(array('ano', 'pessoa_id','funcao_id'));
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
        Schema::dropIfExists('funcao_pessoas');
    }
}
