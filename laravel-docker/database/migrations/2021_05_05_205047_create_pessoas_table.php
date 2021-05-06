<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id_pessoa');
            $table->string('numero_sus');
            $table->string('nome');
            $table->string('cpf');
            $table->date('data_nascimento');
            $table->string('nome_mae');
            $table->enum('sexo_genetico', ['masculino', 'feminino']);
            $table->integer('local_id')->unsigned();
            $table->foreign('local_id')->references('id_local')->on('locals');
            $table->enum('estado_civil', ['Solteiro(a)', 'Casado(a)', 'Divorciado(a)', 'Viúvo(a)', 'Separado judicialmente']);
            $table->enum('escolaridade', ['Ensino Fundamental Incompleto', 'Ensino Fundamental Completo', 'Ensino Médio Incompleto', 'Ensino Médio Completo', 'Ensino Superior Incompleto', 'Ensino Superior Completo', 'Especialização', 'Mestrado', 'Doutorado', 'Pós-Doutorado']);
            $table->string('religiao');
            $table->enum('raca_cor_etnia', ['Branco', 'Pardo', 'Preto', 'Amarelo', 'Indígena', 'Prefere Não Declarar']);
            $table->integer('possui_plano_saude')->default(0);
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
