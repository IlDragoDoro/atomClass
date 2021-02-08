@include('header')
<script>
$('a[id=hd]').removeAttr('hidden');
</script>

<div class="container mt-3">
  <div class="row">
    <div class="col-12 h1  d-flex  justify-content-center">
      Let us know your suggestion
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-12 text-center">
      <form class="" action="{{url('savesuggestion')}}" method="get">
          <textarea type=""  name="sugerencia" rows="10" cols="40" placeholder="I want let you know about..."></textarea>
          <br><input type="submit" class="btn btn-info mt-3" value="Send">
      </form>
    </div>
  </div>
</div>
<div class="container mt-5">
  <div class="row">
    <div class="col-12 h3 text-center">
      Find us here
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 ">
    <iframe allowfullscreen=""
              aria-hidden="false"
              class="map" frameborder="1" height="auto" src="https://maps.google.com/maps?hl=es&amp;q=Histenstrasse+(class)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" tabindex="0"
              width="100%"></iframe>
    </div>
  </div>

</div>

@include('footer')
