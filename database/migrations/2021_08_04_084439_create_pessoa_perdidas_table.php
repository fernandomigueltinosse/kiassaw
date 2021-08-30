<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoaPerdidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_perdidas', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->string('apelido',100);
            $table->string('genero',50);
            $table->integer('idade');
            $table->string('estado civil',50);
            $table->string('deficiecia',100);
            $table->string('tipo de deficiencia',100);
            $table->string('tipo de documento',50);
            $table->string('numero do documento');
            $table->string('nome do pai',100);
            $table->string('nome da mae',100);
            $table->string('local de desaparecimento');
            $table->string('provincia');
            $table->string('local de residencia do cadastrante');
            $table->longText('descricao do incidente');
            $table->string('nome do cadastrante');
            $table->string('apelido do cadastrante');
            $table->string('genero do cadastrante');
            $table->string('data de nascimento');
            $table->string('estado civil do cadastrante');
            $table->string('grau parentesco');
            $table->string('local de residencia');
            $table->integer('contacto do cadastrante');
            $table->string('email');
            $table->string('de onde conheceu kiassaw');
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
        Schema::dropIfExists('pessoa_perdidas');
    }
}
