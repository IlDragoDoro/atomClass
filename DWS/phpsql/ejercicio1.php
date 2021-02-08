<!DOCTYPE html>
<?php
include('bd.php');

//Compruebo el submit
if(isset($_POST['anyadir'])){
  //Recojo la info de los inputs
  $matricula = $_POST['matricula'];
  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $color = $_POST['color'];
  $antiguedad =  $_POST['antiguedad'];
  $kms = $_POST['km'];
  //Incluyo query para meter datos en BD
  $query = "INSERT INTO coches(matricula,marca,modelo,color,antiguedad,kms)
            VALUES ('$matricula','$marca','$modelo','$color','$antiguedad','$kms')";
  //Sesion bd para ejecutar $query
  $bd = mysqli_query($conn,$query);
  //comprobar si funciona
  if(!$bd){
    //Romper procesos y avisar cuando falla
    die("Fallo al insertar");
  }
  echo "<p>Datos insertados correctamente</p>";
  header("Location: ejercicio1.php");
}
 ?>
<html lang="es-ES" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SQL database</title>
  </head>
  <body style="text-align:center">
    <a href=""ejercicio1.php><img src="icon.png" style="width:200px;heigth:50px;"></a>
      <h1> GoCars.SL</h1>
    <h2>Por favor,introduce los datos de tu vehículo a continuación:</h2>
    <div class="formulario">
      <form class="añadir" action="ejercicio1.php" method="post">
      <input type="text" name="matricula"  placeholder="Introduce la matrícula del vehículo:" style="width:280px;"> <br>
      <input type="text" name="marca"  placeholder="Introduce la marca del vehículo" style="width:280px;"><br>
      <input type="text" name="modelo"  placeholder="Introduce el modelo del vehículo:" style="width:280px;"><br>
      <input type="text" name="color"  placeholder="Introduce el color del vehículo:" style="width:280px;"><br>
      <input type="number" name="antiguedad"  placeholder="Introduce la antiguedad en años del vehículo:" style="width:280px;"><br>
      <input type="number" name="km"  placeholder="Introduce el Kilometraje del vehículo:" style="width:280px;">
      <br><br>
      <input name="anyadir" type="submit" value="Añadir">
    </form><br>
    <a href="editar.php"><input type="submit" value="Consultar y editar"></a>  <br><br>
      <a href="borrar.php"><input type="submit" value="Consultar y borrar"></a>
    </div>




  </body>
</html>
