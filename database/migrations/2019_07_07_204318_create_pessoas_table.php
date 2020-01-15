<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('email');
            $table->string('endereco');
            $table->timestamp('data_nascimento');
            $table->string('telefone');
            $table->enum('excluido', ['s', 'n'])->default('n');
            $table->string('foto')->nullable;

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
        Schema::dropIfExists('pessoas');
    }
}
