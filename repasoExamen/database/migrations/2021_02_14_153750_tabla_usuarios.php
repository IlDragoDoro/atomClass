<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::create('usuarios', function (Blueprint $table) {
          $table->id();
          $table->string('usuario');
          $table->string('email')->unique();
          $table->string('password');
          $table->boolean('bloggero');
          $table->rememberToken();
          $table->timestamps();
      });
    }
}
