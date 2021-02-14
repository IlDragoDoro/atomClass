<?php
/*
*Este es el modelo donde se guardarán
* los datos de usuario cuando inicie sesión
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loginModel extends Model
{
  protected $table = 'usuarios';
  public $timestamps = true;
  //Creo un modelo con las columnas de la tabla de la base de datos.
  protected $datosLogin = [
    'usuario','contrasenya','bloggero'];
}