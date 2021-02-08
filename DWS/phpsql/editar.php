<!DOCTYPE html>
<html lang="es-ES" dir="ltr">
<?php
include('bd.php');
 ?>
  <head>
    <meta charset="utf-8">
    <title>Editar</title>
  </head>
  <center>
  <body>
    <a href="ejercicio1.php"><img src="icon.png" style="width:200px;heigth:50px;"></a>
    <h1>Selecciona tu coche:</h1>
    <table border="1">
      <thead>
    <th>Matricula</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Color</th>
    <th>Antiguedad</th>
    <th>KMS</th>
    <th>Editar</th>
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
            <td><a href="edicion.php?matricula=<?php echo $row['matricula']; ?>"><button type="submit" name="editar">Editar</button></a></td>
          </tr>
    <?php } ?>
      </tbody>

    </table>

  </body>
  </center>
</html>
