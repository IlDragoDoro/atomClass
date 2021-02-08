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
      Schema::create('users', function (Blueprint $table) {
          $table->id();
          $table->string('Nombre');
          $table->string('Apellidos');
          $table->string('DNI')->unique();
          $table->string('telefono');
          $table->date('fecha_de_creacion');
          $table->date('fecha_de_actualizacion');
          $table->rememberToken();
          $table->timestamps();
      });

      Schema::create('categorias', function (Blueprint $table) {
          $table->id();
          $table->string('nombre');
          $table->string('descripcion');
          $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
