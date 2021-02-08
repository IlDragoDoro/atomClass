@include('header')
<div class="container">
  <div class="h1 text-secondary text-center mt-3">
    Welcome to the best blog ever
  </div>
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

</div>
<div class="container d-flex justify-content-center mt-5">
  <form class="form" action="{{ url('comprueba')}}" method="get">
    <div class="form-row">
      <div class="form-group col-12">
        <label for="Useroremail">User or email</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-12">
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass" class="form-control">
      </div>
    </div>
    <input type="submit" class="btn btn-success" name="button" value="Log in"> or
    <a href="{{ url('registro')}}" class="btn btn-info"name="button">Register</a>
  </form>
</div>
@include('footer')
