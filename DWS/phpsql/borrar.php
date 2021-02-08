<!DOCTYPE html>
<?php
  include('bd.php');
//Compruebo el submit
 if(isset($_GET['matricula'])){
$matricula = $_GET['matricula'];

$query = "DELETE FROM coches WHERE matricula = '$matricula'";
$ejquery = mysqli_query($conn,$query);
if(!$ejquery){
  die("Error al borrar");
}
header("Location: borrar.php");

 }

 ?>
<html lang="es-ES" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Eliminar Datos</title>
    <style media="screen">
    </style>
  </head>
  <center>
  <body>
<a href="ejercicio1.php"><img src="icon.png" style="width:200px;heigth:50px;"></a>
<h1>Elimina los datos que desees:</h1>
<table border="1">
  <thead>
<th>Matricula</th>
<th>Marca</th>
<th>Modelo</th>
<th>Color</th>
<th>Antiguedad</th>
<th>KMS</th>
<th>Borrar</th>
  </thead>

  <tbody>
    <?php
    //Creamos consulta
    $query = "SELECT * FROM coches";
    //Ejecutar el $query
    $ejec = mysqli_query($conn,$query);
    //Comprobamos si funciona
    if(!$ejec){
      die("No hay datos disponibles");
    }
    //En row metemos cada resultado del select
    while ($row = mysqli_fetch_array($ejec)) {?>
      <tr> <!-- Imprime información recogida en cada row de la bd -->
        <td><?php echo $row['matricula']; ?></td>
        <td><?php echo $row['marca']; ?></td>
        <td><?php echo $row['modelo']; ?></td>
        <td><?php echo $row['color']; ?></td>
        <td><?php echo $row['antiguedad']; ?></td>
        <td><?php echo $row['kms']; ?></td>
        <td><a href="borrar.php?matricula=<?php echo $row['matricula']; ?>"><button type="submit" name="borrar">Borrar</button></a></td>
      </tr>
<?php } ?>
  </tbody>

</table>
  </body>
  </center>
</html>
