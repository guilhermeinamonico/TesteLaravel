<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->increments('id_unidades');
            $table->string('nomeApto');
            $table->double('metragem');
            $table->string('nomeTorre');
            $table->string('andar');
            $table->integer('id_empreendimentos')->unsigned();
            $table->foreign('id_empreendimentos')->references('id_empreendimentos')->on('empreendimentos')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('unidades');
    }
}
