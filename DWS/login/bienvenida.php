<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Welcome page</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
 integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body style="text-align: center">
<form  action="salida.php" method="post">
<button class="btn btn-success" type="submit" name="button" onclick="alert('Adios!')">Salir</button>
</form>
<?php
session_start();
if(isset($_SESSION['usuario'])){
  echo "<script>alert('Bienvenido a la web')</script>";
  echo "<h3>Bienvenido ".$_SESSION['usuario']." a la web</h3>";
}else{
  echo "<script>alert('Algo ha salido mal! :( ')</script>";

}


?>
</body>
</html>
