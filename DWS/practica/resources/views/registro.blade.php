<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Elder Writer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
  <form class="mt-5" action="{{url('registro')}}">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center">Registrate aquí y no te arrepentirás!!</h1>
          <hr>
        </div>
      </div>
    <div class="row">
    <div class="col-12">
        <input required name="nombre" class="form-control  ml-3" type="text" placeholder="Nombre:">
    </div>
    </div>
    <div class="row">
    <div class="col-12">
        <input required name="apellidos" class="form-control  ml-3 mt-3" type="text" placeholder="Apellidos">
    </div>
    </div>

    <div class="row">
    <div class="col-12">
        <input required name="email" class="form-control  ml-3 mt-3" type="email" placeholder="Email:">
    </div>
    </div>

    <div class="row">
    <div class="col-12">
        <input required name="usuario" class="form-control  ml-3 mt-3" type="text" placeholder="Usuario:">
    </div>
    </div>

    <div class="row">
    <div class="col-12">
        <input required name="contrasenya" class="form-control  ml-3 mt-3" type="password" placeholder="Contraseña:">
    </div>
    </div>

    <div class="row">
    <div class="col-12">
        <input required name=contrasenya2"" class="form-control  ml-3 mt-3" type="password" placeholder="Repite tu contraseña:">
    </div>
    </div>

    <div class="row">
    <div class="col-12">
        <label required class="mt-3 ml-3">Quieres ser bloggero?.....</label>
        <select  name="blogger">
          <option value="1">si</option>
          <option value="0">no</option>
        </select>
    </div>
    </div>
    <div class="row">
      <div class="col-12">
        <hr>
          <input required class="btn btn-success btn-lg mt-3" style="margin-left:40%;" type="submit" value="Registrate">
      </div>
    </div>
    </div>
  </form>
  </body>
</html>
