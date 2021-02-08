<!DOCTYPE html>
<?php include('bd.php') ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Resgistro</title>
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/registro.css">
    <script src="sugerencias.js" charset="utf-8"></script>
  </head>
  <body>
    <!--Creo el formulario de registro donde pueden meter sus datos-->
<h1>Formulario de registro</h1>
<h2>Por favor,introduce los datos y dale a aceptar.</h2>
<form class="form" action="4.registro.php" method="post">
<div class="uno">
  <input type="text" name="dni" placeholder="DNI:" required autofocus><br><br>
  <input type="text" name="nombre" placeholder="Nombre:" required><br><br>
  <input type="text" name="apellido1" placeholder="Apellido materno:" required><br><br>
  <input type="text" name="apellido2" placeholder="Apellido paterno:" required>
  <p>Fecha de nacimiento:</p>
  <input type="date" name="cumpleanyos" required>
</div>
<div class="dos">
  <input type="text" name="direccion" placeholder="Dirección:" required><br><br>
  <input type="text" name="poblacion" placeholder="Población:" required><br><br>
  <input type="number" name="cp" placeholder="CP" required><br><br>
  <input type="email" name="email" placeholder="Email:" required><br><br>
  <input type="text" name="usuario" placeholder="Usuario:" required onkeyup="sugerencias(this.value)"><br><br>
  <p>Sugerencias: <span id="sugerenciaTXT" style="font-weight:bold"></span></p>
<span id="comprobarusuario"></span>
  <input type="password" name="contrasenya" placeholder="Contraseña:" required id="password"><br><br>
  <span id="mensaje"></span>
  <ul>
    <li id="mayus">1 Mayuscula</li>
    <li id="special">1 Carácter Especial</li>
    <li id="numbers">Numeros</li>
    <li id="lower">Minúsculas</li>
    <li id="len">Mínimo 8 caracteres</li>
  </ul>
  <input type="password" name="contrasenya2" placeholder="Repite tu contraseña:" required>
</div>
<div class="pie">
    <input type="submit" class="submit" name="submit" value="Si! quiero registrarme!">
</div>
</form>
  </body>
  <?php
//Meto los datos si existe una recogida.
if(isset($_POST['submit'])){
$dni = $_POST['dni'];
$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$cumpleanyos=$_POST['cumpleanyos'];
$direccion=$_POST['direccion'];
$poblacion=$_POST['poblacion'];
$cp=$_POST['cp'];
$email=$_POST['email'];
$usuario=$_POST['usuario'];
$contrasenya=$_POST['contrasenya'];
$contrasenya2=$_POST['contrasenya2'];
// Encripto la contraseña
$hash = password_hash($contrasenya, PASSWORD_DEFAULT);
//Compruebo si las dos contraseñas coinciden y creo y ejecuto la query.
if($contrasenya == $contrasenya2){
  $query = "INSERT INTO usuarios(dni,nombre,apellido1,apellido2,cumpleanyos,
                        direccion,poblacion,cp,email,usuario,contrasenya)
                 VALUES('$dni','$nombre','$apellido1','$apellido2','$cumpleanyos',
                        '$direccion','$poblacion','$cp','$email','$usuario','$hash')";
  $ejec = mysqli_query($conn,$query);
  //Si algo falla dará error.
  if(!$ejec){
    die("Algo ha salido mal");
  }else{ //Si nada falla en la conexion,compruebo si el hash es la misma contraseña.
    if(password_verify($contrasenya, $hash)){
      echo "<script>alert('Se ha guardado la información correctamente')</script>";
      header("Refresh:0; url=0.index.php"); //Esto te envia para que puedas iniciar sesión.
    }else{ //si no son lo mismo,dará error.
      echo "<script>alert('La contraseña es incorrecta.')</script>";
    }
  }

}else{ //Si las dos contraseñas no coinciden,dará error.
  echo "<script>alert('Las contraseñas no coinciden')</script>";
}

}
   ?>
   <script src="jquery.js"></script>
   <script src="password.js"></script>
</html>
