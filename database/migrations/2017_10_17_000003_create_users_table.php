<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('biografia',255);
            $table->rememberToken();
            $table->timestamps();
        
            $table->integer('universidade_id')->unsigned()->nullable();
            $table->foreign('universidade_id')->references('id')->on('universidades')->onDelete('cascade');

            $table->integer('tipo_user_id')->unsigned()->nullable();
            $table->foreign('tipo_user_id')->references('id')->on('tipo_users')->onDelete('cascade');

            $table->integer('cursos_id')->unsigned()->nullable();
            $table->foreign('cursos_id')->references('id')->on('cursos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
