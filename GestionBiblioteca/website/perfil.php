<!DOCTYPE html>
<?php include('bd.php');
?>
<html lang="es-ES" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mi Perfil</title>
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/barraBusqueda.css">

    <style media="screen">
      .content{
        position: relative;
        float: right;
        border: 1px solid black;
        width: 50%;
        height: 50%;
        margin-right: 5%;
        margin-top: 3%;
        text-align: center;
      }

      .content h3{
        font-style: oblique;
      }

      .content h4{
        font-weight: lighter;
        font-style: italic;
      }

      .left{
        position: relative;
        float: left;
        border: 1px solid goldenrod;
        width: 25%;
        margin-top: 7%;
        margin-left: 7%;
        padding: 1%;
        border-radius: 5%;
      }

      .left img{
        margin-left: 25%;
        width: 50%;
      }

      .left:hover{
        filter: brightness(150%);
        transition: 3s;
      }
    </style>
  </head>

  <?php
  $usuario=$_SESSION['usuario'];
  $dni = $_SESSION['dni'];
  $nombre=$_SESSION['nombre'];
  $apellido1 = $_SESSION['apellido1'];
  $apellido2 = $_SESSION['apellido2'];
  $cumpleanyos= $_SESSION['cumpleanyos'];
  $direccion= $_SESSION['direccion'];
  $poblacion= $_SESSION['poblacion'];
  $cp= $_SESSION['cp'];
  $email= $_SESSION['email'];
   ?>
  <body>
<a href="1.home.php" class="logoUp"><img src="img/logo.png" width="150px"></a>
<div class="header">
<ul>
<a href="1.home.php">Home</a>
<a href="2.sobreNosotros.php">Sobre Nosotros</a>
<a href="3.contacto.php">Contacto</a>
<a href="perfil.php"> Mi Perfil</a>
<form class="form_Search" action="buscar.php" method="get">
  <input  class="search_bar" type="text" name="busqueda" id="busqueda" placeholder="Introduce tu busqueda">
  <input type="submit" value="Buscar" class="btn_search" >
</form>
<form  action="0.index.php" method="post"><button class="salida" type="submit" name="button"><img src="img/logout.png" width="100%"></button></form>
<hr>
</ul>
</div>

<div class="left">
<img class="profile" src="img/profile.png">
<img src="img/vip.png">
</div>

<div class="content">
<h1>INFORMACIÓN DE PERFIL:</h1>
<h3>Usuario:</h3>
<h4><?php echo $usuario ?></h4>
<h3>DNI:</h3>
<h4><?php echo $dni; ?></h4>
<h3>Nombre:</h3>
<h4><?php echo $nombre; ?></h4>
<h3>Apellido Materno:</h3>
<h4><?php echo $apellido1; ?></h4>
<h3>Apellido Paterno:</h3>
<h4><?php echo $apellido2; ?></h4>
<h3>Cumpleaños:</h3>
<h4><?php echo $cumpleanyos; ?></h4>
<h3>Dirección:</h3>
<h4><?php echo $direccion; ?></h4>
<h3>Población:</h3>
<h4><?php echo $poblacion; ?></h4>
<h3>CP:</h3>
<h4><?php echo $cp; ?></h4>
<h3>Email:</h3>
<h4><?php echo $email; ?></h4>


</div>

  </body>



</html>
