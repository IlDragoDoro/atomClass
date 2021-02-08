@include('header')

<div class="container">
  <div class="h1 text-secondary text-center mt-3">
    Resgister today, enjoy always.
  </div>
</div>
<div class="row justify-content-center">
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
<div class="container">
  <form method="get"  action="{{ url('store') }}" class="form needs-validation" novalidate>
    @csrf
    <div class="form-row">
      <div class="form-group col-12">
        <label for="Useroremail">Name</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="MyName">
          @error ('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-12">
        <label for="Useroremail">Lastname</label>
        <input type="text" id="lname" name="lname" class="form-control @error('lname') is-invalid @enderror" placeholder="LastName">
          @error ('lname')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-12">
        <label for="Useroremail">Email</label>
        <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="exemple@exemple.com" required>
          @error ('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-12">
        <label for="Useroremail">Nick name</label>
        <input type="text" id="nick" name="nick" class="form-control @error('nick') is-invalid @enderror" placeholder="Someone" required>
          @error ('nick')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-12">
        <label for="Useroremail">Password</label>
        <input type="password"  id="pass" name="pass" class="form-control @error('pass') is-invalid @enderror" required>
        @error ('pass')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-12">
        <label for="Useroremail">Confirm password</label>
        <input type="password" id="cpass" name="cpass" class="form-control @error('cpass') is-invalid @enderror" required>
        @error ('cpass')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-12">
        <label for="Useroremail">I want to be Bloger</label>
        <input type="checkbox" id="bloguer" name="bloguer" class="checkbox" required>

      </div>
    </div>
  <button type="submit" class="btn btn-success">Register</button>
  </form>

</div>

@include('footer')
