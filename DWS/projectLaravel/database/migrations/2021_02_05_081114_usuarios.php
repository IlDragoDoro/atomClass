<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('usuarios', function (BluePrint $table) {
              $table -> id();
              $table -> string('name',100);
              $table -> string('lname',100);
              $table -> string('email',255);
              $table -> string('nick',100);
              $table -> string('pass',255);
              $table -> boolean('bloguer')->default(false);
              $table -> timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
