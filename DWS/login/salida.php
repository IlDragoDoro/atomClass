<!DOCTYPE html>
<html lang="es-ES">

<head>
<title>Has cerrado sesión</title>
</head>
<center>
<body>
<h1>Has cerrado sesión correctamente</h1>
<form action="login.php">
<input type="submit" value="Volver a inicio"/>
</form>
</center>

<?php 
session_start(); //Inicia sesión
session_unset(); //Vacia las variables de sesión
session_destroy(); //Destruye la sesión

//vuelta al login
header('Location:login.php');
?>

</body>
</html>
