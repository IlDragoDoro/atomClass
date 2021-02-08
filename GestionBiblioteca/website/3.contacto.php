<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/barraBusqueda.css">
    <title></title>
  </head>
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
    <center>

    <div class="left">
      <h2>Ubicación</h2>
      <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3078.7315732967827!2d2.5010083155420415!3d39.49797541892352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x129788fef0948d5b%3A0xc10accc3ef41ff66!2sIES%20Son%20Ferrer!5e0!3m2!1ses!2ses!4v1606136618925!5m2!1ses!2ses" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

      <h2>Información:</h2>
      <div class="horarios">
        <h3>Horarios:</h3>
        <p>L-V 7:00H a 23:00H</p>
        <p>Sabados 7:00H a 15:00H</p>
        <p>Domingos cerrado</p>
      </div>
      <div class="contact">
        <h3>Tel: 971456238</h3>
        <h3>@: TheDragonLibrary@gmail.com</h3>
      </div>
    </div>


    <div class="right">
      <form class="formulario" action="3.contacto.php" method="post">
        <h2>Formulário de contacto:</h2>
        <input type="text" name="nombre" placeholder="Nombre:" required><br><br>
        <input type="email" name="email" placeholder="Email:" required><br><br>
        <input type="text" name="asunto" placeholder="Asunto:" required><br><br>
        <textarea name="textarea" rows="10" cols="40" placeholder="Escribe tu mensaje"></textarea><br>
        <input type="submit" name="submit" value="Enviar">
      </form>
    </div>
  </center>

  <?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  if(isset($_POST['submit'])){
    if(isset($_POST['nombre']) && isset($_POST['email'])
    && isset($_POST['asunto']) && isset($_POST['textarea'])){
      $nombre = $_POST['nombre'];
      $email = $_POST['email'];
      $asunto= $_POST['asunto'];
      $mensaje= $_POST['textarea'];


      require 'PHPMailer-master/src/Exception.php';
      require 'PHPMailer-master/src/PHPMailer.php';
      require 'PHPMailer-master/src/SMTP.php';

      $mail = new PHPMailer();
      $mail->isSMTP();
      $mail->Mailer = "smtp";

      /*$mail->SMTPDebug = 1;*/
      $mail->SMTPAuth = TRUE;
      $mail->SMTPSecure="tls";
      $mail->Port=587;
      $mail->Host="smtp.gmail.com";
      $mail->Username="librarythedragon0@gmail.com";
      $mail->Password="thedragonlibrary0";

      $mail->IsHTML(true);
      $mail->AddAddress("librarythedragon0@gmail.com","$nombre");
      $mail->SetFrom("librarythedragon0@gmail.com","The Dragon Library");
      $mail->AddReplyTo("librarythedragon0@gmail.com","Reply");
      $mail->Subject="$asunto";
      $content = "El usuario: $nombre ha enviado una consulta desde $email : <br> $mensaje";

      $mail->MsgHTML($content);
      if(!$mail->Send()){
        echo "Error al enviar el mensaje";
        var_dump($mail);
      }else{
        echo "<p class='mssg'>El mensaje se ha envado correctamente<p>";

      }


        }
  }


   ?>

  </body>
</html>
