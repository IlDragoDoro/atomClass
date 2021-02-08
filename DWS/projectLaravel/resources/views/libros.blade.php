@include('header')
<script>
$('a[id=hd]').removeAttr('hidden');
</script>
<!-- Se ha hecho básica esta parte, ya que así ha sido requerida,
el resto de la app está decente saludo-->
<div class="container">
    <div class="row mt-3">
      <div class="col-12 h1 text-center">
        Books
      </div>
    </div>
</div>
<div class="container mt-5 mb-5">
<div class="row">
  <div class="col-4">
    <div class='card border-primary'>
       <img src='book1.png' alt='logoLibro' clas='card-img-top'>
        <div class='card-body'>
        <h4 class='card-title'>Primer libro</h4>
        <p class='card-text'>Author: Adam Oehlenschläger</p>
        <p class='card-text'>Editorial: best</p>
        <a href='#' class='btn btn-danger btn-lg' data-toggle="modal" data-target="#modal">Buy</a>
        <!--First modal for first book-->
        <div class="modal fade" id="modal" tabindex="-1" >
          <div class="modal-dialog" role="document">
            <div class="modal-content"><!--si quitamos este trozo de codigo obtetnemos un modal diferente-->
              <div class="modal-header">
                <h5 class="modal-title">Confirm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Are you sure that you want to buy this book?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="alert('Book ordered, few days later it will arrive to your home.')">Yes</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal"  onclick="alert('Cencelled')">Cancel</button>
              </div>
            </div>
          </div>
        </div>
        </div>
     </div>
  </div>
  <div class="col-4">
    <div class='card border-primary'>
       <img src='book1.png' alt='logoLibro' clas='card-img-top'>
        <div class='card-body'>
        <h4 class='card-title'>Book pt i</h4>
        <p class='card-text'>Author: Adam Oehlenschläger</p>
        <p class='card-text'>Editorial: Donno</p>
        <a href='#' class='btn btn-danger btn-lg'  data-toggle="modal" data-target="#modal">Buy</a>

        </div>
     </div>
  </div>
  <div class="col-4">
    <div class='card border-primary'>
       <img src='book1.png' alt='logoLibro' clas='card-img-top'>
        <div class='card-body'>
        <h4 class='card-title'>Book pt ii</h4>
        <p class='card-text'>Author: Adam Oehlenschläger</p>
        <p class='card-text'>Editorial: Enytorial</p>
        <a href='#' class='btn btn-danger btn-lg' data-toggle="modal" data-target="#modal">Buy</a>

        </div>
     </div>
  </div>
</div>
<div class="row mt-3">
  <div class="col-4">
    <div class='card border-primary'>
       <img src='book1.png' alt='logoLibro' clas='card-img-top'>
        <div class='card-body'>
        <h4 class='card-title'>Hello world</h4>
        <p class='card-text'>Author: Adam Oehlenschläger</p>
        <p class='card-text'>Editorial: Worst</p>
        <a href='#' class='btn btn-danger btn-lg' data-toggle="modal" data-target="#modal">Buy</a>

        </div>
     </div>
  </div>
  <div class="col-4">
    <div class='card border-primary'>
       <img src='book1.png' alt='logoLibro' clas='card-img-top'>
        <div class='card-body'>
        <h4 class='card-title'>Something random</h4>
        <p class='card-text'>Author: Adam Oehlenschläger</p>
        <p class='card-text'>Editorial: Edit</p>
        <a href='#' class='btn btn-danger btn-lg' data-toggle="modal" data-target="#modal">Buy</a>

        </div>
     </div>
  </div>
  <div class="col-4">
    <div class='card border-primary'>
       <img src='book1.png' alt='logoLibro' clas='card-img-top'>
        <div class='card-body'>
        <h4 class='card-title'>Tired of practices</h4>
        <p class='card-text'>Author: Adam Oehlenschläger</p>
        <p class='card-text'>Editorial: Better</p>
        <a href='#' class='btn btn-danger btn-lg' data-toggle="modal" data-target="#modal">Buy</a>

        </div>
     </div>
  </div>
</div>
</div>
@include('footer')
