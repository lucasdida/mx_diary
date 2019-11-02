<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelatosTable extends Migration
{

    public function up()
    {
        Schema::create('relatos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('dt_nascimento');
            $table->string('telefone');
            $table->string('cep');
            $table->string('uf');
            $table->string('logradouro');
            $table->string('nr_logradouro');
            $table->string('bairro');
            $table->string('localidade');
            $table->text('biografia');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('relatos');
    }
}
