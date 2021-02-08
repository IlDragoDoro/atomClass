<?php
session_start();
$servername = "localhost";
$database = "gocars";
$username = "root";
$password = "";
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
  die("La conexión ha fallado: " .
  mysqli_connect_error());
}
  echo "<p style=background-color:orange;text-align:center;>Conectado correctamente a la base de datos</p>";

?>
