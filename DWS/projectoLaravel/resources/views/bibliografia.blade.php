<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Libros del autor</title>
    @include('header')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"  >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-4">
          <h4 class="text-center">Título</h4>
          <img class="w-100" src="http://3.bp.blogspot.com/-Iw1kS_iGs7U/T3g6Zlh0wSI/AAAAAAAAAJI/bIJ8xGYqDko/s1600/libro.png">
          <button style="margin-left:15%;" type="button" class="btn btn-dark" data-toggle="modal" data-target="#mymodal">
            Mas información
          </button>
        </div>
        <div class="col-4">
          <h4 class="text-center">Título</h4>
          <img class="w-100" src="http://3.bp.blogspot.com/-Iw1kS_iGs7U/T3g6Zlh0wSI/AAAAAAAAAJI/bIJ8xGYqDko/s1600/libro.png">
          <button style="margin-left:15%;" type="button" class="btn btn-dark" data-toggle="modal" data-target="#mymodal">
            Mas información
          </button>
        </div>
        <div class="col-4">
          <h4 class="text-center">Título</h4>
          <img class="w-100" src="http://3.bp.blogspot.com/-Iw1kS_iGs7U/T3g6Zlh0wSI/AAAAAAAAAJI/bIJ8xGYqDko/s1600/libro.png">
          <button style="margin-left:15%;" type="button" class="btn btn-dark" data-toggle="modal" data-target="#mymodal">
            Mas información
          </button>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-4">
          <h4 class="text-center">Título</h4>
          <img class="w-100" src="http://3.bp.blogspot.com/-Iw1kS_iGs7U/T3g6Zlh0wSI/AAAAAAAAAJI/bIJ8xGYqDko/s1600/libro.png">
          <button style="margin-left:15%;" type="button" class="btn btn-dark" data-toggle="modal" data-target="#mymodal">
            Mas información
          </button>
        </div>
        <div class="col-4">
          <h4 class="text-center">Título</h4>
          <img class="w-100" src="http://3.bp.blogspot.com/-Iw1kS_iGs7U/T3g6Zlh0wSI/AAAAAAAAAJI/bIJ8xGYqDko/s1600/libro.png">
          <button style="margin-left:15%;" type="button" class="btn btn-dark" data-toggle="modal" data-target="#mymodal">
            Mas información
          </button>
         </div>
        <div class="col-4">
          <h4 class="text-center">Título</h4>
          <img class="w-100" src="http://3.bp.blogspot.com/-Iw1kS_iGs7U/T3g6Zlh0wSI/AAAAAAAAAJI/bIJ8xGYqDko/s1600/libro.png">
          <button style="margin-left:15%;" type="button" class="btn btn-dark" data-toggle="modal" data-target="#mymodal">
            Mas información
          </button>        </div>
      </div>
    </div>
  </body>
  <hr style="margin-top:5%;">

  <div class="modal fade" id="mymodal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Libro del año!!</h3>
        </div>
        <div class="modal-body">
          <p>El mejor libro,compralo solo por 99.99$</p><br>
          <button data-dismiss="modal" style="margin-left:15%;" type="button" class="btn btn-dark" data-toggle="modal" data-target="#comprar">
            Comprar ya!!
          </button>
        </div>
        <div class="modal-footer">
          <small>@copyleft VBD Productions</small>
          <button type="button" class="btn btn-default" data-dismiss="modal">
            <i class="far fa-window-close"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="comprar">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Compraado!</h3>
        </div>
        <div class="modal-body">
          <p>El libro será enviado junto a su factura a tu  domicilio pronto!</p><br>
          </button>
        </div>
        <div class="modal-footer">
          <small>@copyleft VBD Productions</small>
          <button type="button" class="btn btn-default" data-dismiss="modal">
            <i class="far fa-window-close"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
  @include('footer');
</html>
