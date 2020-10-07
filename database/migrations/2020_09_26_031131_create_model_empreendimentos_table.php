<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelEmpreendimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empreendimentos', function (Blueprint $table) {
            $table->increments('id_empreendimentos');
            $table->string('nome');
            $table->string('cidade');
            $table->double('valorMquadrado',10,2);
            $table->date('dataEntrega');

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
        Schema::dropIfExists('empreendimentos');
    }
}
