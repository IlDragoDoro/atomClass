<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login/Register</title>
    </head>
    <center>
    <body>
        <h3>Login / Register here!</h3><br>
        <form method="get" action="{{url('inicioSesion')}}">
          <input required name="usuario" type="text" placeholder="Usuario:"><br><br>
          <input required name="password" type="password" placeholder="Contraseña:"><br><br>
          <input type="submit" name="submit" value="Iniciar Sesión">
          <a href="{{url('registro')}}"><button type="button" name="button">Registrarse</button></a>
        </form>
    </body>
  </center>
</html>
