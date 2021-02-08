<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
    @include('header')
  </head>
  <body>
    @if(session('bloggero') == 1)
      @include('entrada')
    @endif
    <center>
    <div class="d-flex flex-column-reverse" style="margin-left:30%;">
      <table class="mt-3">
        @php
        use App\Models\entradaModelo;
        $contenidos = entradaModelo::all();
        echo "<td>";
          foreach ($contenidos as $contenido):
                echo "<tr>".$contenido->contenido."</tr>";
          endforeach;
          echo"</td>";
        @endphp
      </table>
    </div>
  </center>
  </body>
  <hr style="margin-top:5%;">
  @include('footer')
</html>
