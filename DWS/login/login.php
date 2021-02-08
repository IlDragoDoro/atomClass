<!DOCTYPE html>
<html lang="es-ES">

<head>
<title>Login</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>

<center>
<body>

<h1>Inicia sesión:</h1> <br>
<form  action="login.php" method="post" name="formulario">
<div class="form-element">
<label>Usuario:</label>
<input name="user" type="text"/> <br>
<label>Contraseña:</label></th>
<input name="passwd" type="password"/><br><br>
 <br>
 </div>
 <button class="btn btn-dark btn-lg" type="submit" name="button">Inicia sesión</button>

</form>
</body>
</center>

<?php
session_start();
if (isset($_POST['submit'])){ #Si existe una recogida $_post llamada registrarse,entonces:
    if(isset($_POST['user']) &&
       isset($_POST['passwd'])){ #Si existe una recogida $_post llamada user (name of input)
                                    #Ahora se podría comprobar la validación de los campos, pero no se pide ;)
           if($_POST['user']=='admin' &&
               $_POST['passwd']=='1234'){
               $_SESSION['usuario']='admin';
             header('Location:bienvenida.php');
               }else if($_POST['user']=='garen' &&
                        $_POST['passwd']=='demacia'){
                        $_SESSION['usuario']='garen';
                        header('Location:bienvenida.php');
               }
    }
}

?>


</html>
