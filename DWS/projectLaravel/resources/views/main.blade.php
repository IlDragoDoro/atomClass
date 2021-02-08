@include('header')
<script>
$('a[id=hd]').removeAttr('hidden');
</script>

<div class="col-md-12">
    <div class="card-body">
      @if (session('status'))
        <div class="alert alert-success" role="alert">
          <button type="buttton" class="close" data-dismiss="alert">&times;</button>
          {{ session('status') }}
        </div>
      @elseif(session('failed'))
        <div class="alert alert-dannger" role="alert">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          {{ session('failed') }}
        </div>
      @endif
    </div>
</div>

@if (session('valor') == 1)

    <div class="container">
      <div class="row mt-3">
        <div class="col-12 text-center h1">
          Hi Blogger!
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <small>You can type a new entry</small>
        </div>
      </div>
    </div>
<div class="container d-flex  justify-content-center mt-3">
  <div class="row">
    <div class="col-8">
      <form class="" action="{{url('/savePost')}}" method="get">
        <textarea name="content" id="content" rows="8" cols="45" placeholder="Type here your new blog entry.."></textarea>
        <input type="submit" class="btn btn-success" name="button" value="Save">
      </form>
    </div>
  </div>
</div>
@else
<div class="container">
  <div class="row mt-3">
    <div class="col-12 text-center h1">
      Hi Reader!
    </div>
  </div>
  <div class="row">
    <div class="col-12 text-center">
      <small><p>You can't type any new entry, because you are using an <mark class="text-danger">reader</mark> account!</p></small>
    </div>
  </div>
</div>
@endif

<div class="container mt-5">
  <div class="row">
    <div class="col-12 h3 text-center border bg-info border-1 pt-3 pb-3">
      Newst posts!
    </div>
  </div>
<div class="d-flex flex-column-reverse">
  @foreach($entradas as $ent)
    <div class="p bg-light pt-2 pb-2 pl-3 pr-3 mt-1 mb-1">{{$ent['content']}}</div>
  @endforeach
</div>

</div>
@include('footer')
