<?php

/*
*Este es el modelo donde se guardarán las entradas
*introducidas para mostrarlas en Home.
*/

namespace App\Models; //La ruta donde se encuentra el modelo

use Illuminate\Database\Eloquent\Model;

class entradaModelo extends Model
{
  protected $table = 'entradas'; 
  public $timestamps = true;
  //Creo un modelo con las columnas de la tabla de la base de datos.
  protected $datosLogin = [ //
    'contenido'];
}

?>
