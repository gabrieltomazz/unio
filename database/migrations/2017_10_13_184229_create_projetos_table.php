<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->increments('id');
            $table->string("titulo");
            $table->longText("apresentacao_do_problema");
            $table->longText("estado_da_arte");
            $table->longText("justificativa_do_projeto");
            $table->longText("objetivo");
            $table->longText("metodo");
            $table->char("cronograma", 100);
            $table->longText("ref_bibliograficas");
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
        Schema::dropIfExists('projetos');
    }
}
