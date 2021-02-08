<!DOCTYPE html>
<?php include('bd.php');?>

<html lang="es-ES" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Biblioteca -Home </title>
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/barraBusqueda.css">
    <script src="reloj.js"></script>
  </head>
  <body>
<a href="1.home.php" class="logoUp"><img src="img/logo.png" width="150px"></a>
<div class="header">
<ul>
<a href="1.home.php">Home</a>
<a href="2.sobreNosotros.php">Sobre Nosotros</a>
<a href="3.contacto.php">Contacto</a>
<a href="perfil.php"> Mi Perfil</a>
<form  action="0.index.php" method="post"><button class="salida" type="submit" name="button"><img src="img/logout.png" width="100%"></button></form>

  <form class="form_Search" action="buscar.php" method="get">
    <input  class="search_bar" type="text" name="busqueda" id="busqueda" placeholder="Introduce tu busqueda">
    <input type="submit" value="Buscar" class="btn_search" >
  </form>

<hr>
</ul>
</div>
  <section id="hora" style="margin-left:6%;margin-bottom:1%;margin-top:7.5%;font-weight: bold;position:absolute;font-size:1.5em;"></section>



<div class="content">
  <h2>TODAS LAS CATEGORÍAS</h2>
  <a href="libros/actualidad.php"><img src="img/categorias/actualidad.png"></a>
  <a href="libros/bienestar.php"><img src="img/categorias/bienestar.png"></a>
  <a href="libros/cocina.php"><img src="img/categorias/cocina.png"></a><br>
  <a href="libros/comic.php"><img src="img/categorias/comic.png"></a>
  <a href="libros/infantil.php"><img src="img/categorias/infantil.png"></a>
  <a href="libros/juvenil.php"><img src="img/categorias/juvenil.png"></a><br>
  <a href="libros/literatura.php"><img src="img/categorias/literatura.png"></a>
  <a href="libros/psicologia.php"><img src="img/categorias/pensamiento.png"></a>
  <a href="libros/tiempolibre.php"><img src="img/categorias/tiempolibre.png"></a>
</div>

  </body>
</html>
