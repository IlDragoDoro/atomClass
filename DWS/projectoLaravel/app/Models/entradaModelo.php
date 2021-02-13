<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class entradaModelo extends Model
{
  protected $table = 'entradas';
  public $timestamps = true;
  //Creo un modelo con las columnas de la tabla de la base de datos.
  protected $datosLogin = [
    'contenido'];
}
