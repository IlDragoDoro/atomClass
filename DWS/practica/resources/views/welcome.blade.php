<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>The Elder Writer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"  >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
      <form class="" action="{{url('login')}}">
        <div class="container">
          <div class="row mt-5">
            <div class="col-12">
                <h1 class="text-center">Bienvenido a the elder writer</h1>
            </div>
          </div>

          <div class="row" style="margin-left:30%;">
            <div class="col-12">
              <input required name="usuario" class="form-control mt-3 w-50" type="text" placeholder="Usuario:">
            </div>
          </div>

          <div class="row" style="margin-left:30%;">
            <div class="col-12">
              <input required name="contrasenya" class="form-control w-50 mt-3" type="password" placeholder="Contraseña:">
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-6">
              <input class="btn-success btn-lg" type="submit" value="Login" style="margin-left:75%;">
            </div>
            <div class="col-6">
              <a href="{{url('registrarse')}}"><input class="btn-info btn-lg" type="button" value="register"></a>
            </div>
          </div>
        </div>
      </form>
    </body>
</html>
