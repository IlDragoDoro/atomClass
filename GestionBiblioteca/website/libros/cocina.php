<!DOCTYPE html>
<?php include('../bd.php') ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="shortcut icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/libros.css">
    <link rel="stylesheet" href="../css/barraBusqueda.css">
    <title>Libros de cocina</title>
  </head>

  <body>
    <a href="../1.home.php" class="logoUp"><img src="../img/logo.png" width="150px"></a>
    <div class="header">
    <ul>
    <a href="../1.home.php">Home</a>
    <a href="../2.sobreNosotros.php">Sobre Nosotros</a>
    <a href="../3.contacto.php">Contacto</a>
    <a href="perfil.php"> Mi Perfil</a>
    <form class="form_Search" action="buscar.php" method="get">
      <input  class="search_bar" type="text" name="busqueda" id="busqueda" placeholder="Introduce tu busqueda">
      <input type="submit" value="Buscar" class="btn_search" >
    </form>
    <hr>
    </ul>
    </div>
    <center>
    <div class="contenido">
    <h1>Libros de cocina:</h1>
  </body>
  <table border="1">
    <thead>
      <th>Imagen</th>
      <th>Título</th>
      <th>Autor</th>
      <th>Editorial</th>
      <th>Género</th>
      <th>Descripción</th>
      <th>Nº Páginas</th>
      <th>Ficha Técnica</th>
    </thead>
<?php foreach($conn->query ("SELECT * FROM libro WHERE genero = 'cocina'") as $row){?>
  <tr>
    <td><?php $img=$row['img']; echo "<img src='../img/libros/cocina/$img' width='50px'>" ?></td>
    <td style="width:20%;"><?php echo $row['titulo'] ?></td>
    <td style="width:10%;"><?php echo $row['autor'] ?></td>
    <td style="width:10%;"><?php echo $row['editorial'] ?></td>
    <td style="width:5%;"><?php echo $row['genero'] ?></td>
    <td style="width:40%;"><?php echo $row['descripcion'] ?></td>
    <td style="width:3%;"><?php echo $row['paginas'] ?></td>
    <td><?php echo "	<form action='libro.php' method='post'><input type='submit' value='Ver Ficha'></form>"?></td>
  </tr>
<?php } ?>
  </table>
   </div>
 </center>
</html>
