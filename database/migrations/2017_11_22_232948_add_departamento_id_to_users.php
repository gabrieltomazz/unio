<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDepartamentoIdToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
        {
            Schema::table('users', function($table) {
                $table->integer('departamento_id')->unsigned()->nullable();
                $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('cascade');
            });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
