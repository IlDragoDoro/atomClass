<?php
session_start();
$servername = "localhost";
$database = "gestionbiblioteca";
$username = "root";
$password = "";
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
  die("La conexión ha fallado: " .
  mysqli_connect_error());
}



?>
