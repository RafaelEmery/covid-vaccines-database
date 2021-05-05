<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAplicacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aplicacaos', function (Blueprint $table) {
            $table->increments('id_aplicacao');
            $table->date('data_aplicacao');
            $table->integer('numero_dose');
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id_pessoa')->on('pessoas');
            $table->integer('profissional_id')->unsigned();
            $table->foreign('profissional_id')->references('id_pessoa')->on('pessoas');
            $table->integer('local_id')->unsigned();
            $table->foreign('local_id')->references('id_local')->on('locals');
            $table->integer('vacina_id')->unsigned();
            $table->foreign('vacina_id')->references('id_vacina')->on('vacinas');
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
        Schema::dropIfExists('aplicacaos');
    }
}
