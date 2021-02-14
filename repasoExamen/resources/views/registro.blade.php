<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <center>
  <body>
    <h2>Registrate ahora!!!</h2>
  <form action="{{('register')}}">
    <input required type="text" name="usuario" placeholder="Usuario:"><br><br>
    <input required type="email" name="email" placeholder="Email:"><br><br>
    <input required type="password" name="password" placeholder="Contraseña:"><br><br>

    <label for="bloggero">Quieres ser bloggero?</label>
    <select required class="" name="bloggero">
      <option value="0">no</option>
      <option value="1">Si</option>
    </select><br><br>
    <input type="submit" name="submit" value="Registrarse">
  </form>
  </body>
</center>
</html>
