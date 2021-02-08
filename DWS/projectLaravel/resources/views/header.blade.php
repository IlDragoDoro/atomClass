<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @section('nav')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand disabled" href="{{ url('/') }}">Blogg</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('main') }}" id="hd" hidden>Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('libros')}}" id="hd" hidden>Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('biografia')}}" id="hd" hidden>Biography</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ url('sugerencias')}}" id="hd" hidden>Suggestions</a>
          </li>
        </ul>
      </div>
    </nav>
  </head>
  <body class="d-flex flex-column min-vh-100">
