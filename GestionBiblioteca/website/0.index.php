<!DOCTYPE html>
<?php  include('bd.php')?>
<html lang="es-ES" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="img/logo.png">
  </head>
  <center>
  <body>
    <video autoplay muted loop id="video">
    <source src="video/fondo.mp4" type="video/mp4">
  </video>
  <audio src="sound/fondo.m4a" preload="auto" autoplay loop >

  </audio>
<div class="content">
<form class="" action="0.index.php" method="post">
  <img class="logo" src="img/logo.png" height="200px" width="300px">
  <h1>Bienvenido a The Dragon Library</h1>
  <h2>Inícia Sesión:</h2><br>
  <input type="text" id="user" name="user" placeholder="Usuario" autofocus><br><br>
  <input type="password" name="passwd" placeholder="Contraseña"><br><br>
  <input class="submit" type="submit" name="submit" value="Iniciar Sesión"><br><br>
  <a href="recuperarContrasenya.php"><p>He olvidado mi contraseña</p><p>/</p></a> <a href="4.registro.php"><p>No tengo cuenta</p></a><br>

  <?php
  error_reporting(0);
//Miro si existe recogida de datos de user y password tras comprobar el submit.
  if(isset($_POST['submit'])){
    if(isset($_POST['user']) && isset($_POST['passwd'])){
      $user = $_POST['user'];
      $passwd=$_POST['passwd'];
      //Creo el hash de la contraseña introducida.
      $hash = password_hash($passwd,PASSWORD_DEFAULT);
      //Hago la consulta y la ejecuto.
      $sql = $conn->query ("SELECT * FROM usuarios   WHERE usuario = '$user'");
      $row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
      $_SESSION["usuario"]=$row["usuario"];
      $_SESSION["dni"]=$row["dni"];
      $_SESSION["nombre"]=$row["nombre"];
      $_SESSION["apellido1"]=$row["apellido1"];
      $_SESSION["apellido2"]=$row["apellido2"];
      $_SESSION["cumpleanyos"]=$row["cumpleanyos"];
      $_SESSION["direccion"]=$row["direccion"];
      $_SESSION["poblacion"]=$row["poblacion"];
      $_SESSION["cp"]=$row["cp"];
      $_SESSION["email"]=$row["email"];
      $hash= $row['contrasenya'];


        if(password_verify($passwd,$hash)){
              echo "<script> alert('Bienvenido a The Dragon Library')</script>";
              header("Refresh:0; url=1.home.php");
         }else{
      echo "<script>alert('Usuario/Contraseña incorrectos.')</script>";
          }
      }
  }
   ?>

</form>
</div>

  </body>
</center>
</html>
