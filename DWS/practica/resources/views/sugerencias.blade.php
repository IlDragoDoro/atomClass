<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sugerencias</title>
    @include('header')
  </head>
  <body>
    <div class="col-12 text-center">
      <h2>Buzón de sugerencias:</h2>
    </div>
  <div class="container mt-5">
    <form action="{{url('sugerir')}}" method="get">
      <div class="col-12">
        <h5>Tu nombre:</h5>
        <div class="form-group">
          <input name="nombre" type="text" class="form-control w-25" placeholder="Dragon" required>
        </div>
      </div>
      <div class="col-12">
        <h5>Tu email:</h5>
        <div class="form-group">
          <input name="email" type="email" class="form-control w-25" placeholder="email@gmail.com" required>
        </div>
      </div>
      <div class="col-12">
        <h5>Tu mensaje:</h5>
        <div class="form-group">
          <textarea name="sugerencia" rows="8" cols="60" required placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
           ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."></textarea>
        </div>
      </div>
      <div class="col-12">
        <div class="form-group">
          <input type="checkbox" required><label class="ml-2">He leido la politica de privacidad </label>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <hr><input type="submit" class="btn btn-primary" value="Enviar">
        </div>
      </div>
    </form>
  </div>
  </body>
  <hr style="margin-top:5%;">
  @include('footer');
</html>
