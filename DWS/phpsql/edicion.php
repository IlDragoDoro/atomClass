<!DOCTYPE html>
<?php
include('bd.php');

  if(isset($_POST['actualizar'])){
    $matricula = $_GET['matricula'];
    echo $matricula;
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $color = $_POST['color'];
    $antiguedad = $_POST['antiguedad'];
    $kms = $_POST['kms'];

    $query = "UPDATE coches set  marca = '$marca',modelo = '$modelo',color = '$color', antiguedad = '$antiguedad',kms = '$kms' WHERE matricula = '$matricula'";
    $ejecutar = mysqli_query($conn,$query);
    if(!$ejecutar){
      die("Fallo al actualizar");
    }
    header('Location:editar.php');


}
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editalo!</title>
  </head>
  <center>
  <body>
    <a href="ejercicio1.php"><img src="icon.png" style="width:200px;heigth:50px;"></a>
<h1>Edita el coche:</h1>
<form  action="edicion.php?matricula=<?php echo $_GET['matricula'] ?>" method="post">
<input type="text" name="marca" value="" placeholder="Marca"><br><br>
<input type="text" name="modelo" value="" placeholder="Modelo"><br><br>
<input type="text" name="color" value="" placeholder="Color"><br><br>
<input type="number" name="antiguedad" value="" placeholder="Antiguedad"><br><br>
<input type="number" name="kms" value="" placeholder="KMS"><br><br>
<input type="submit" name="actualizar" value="Actualiza"><br><br>
</form>
  </body>
  </center>
</html>
