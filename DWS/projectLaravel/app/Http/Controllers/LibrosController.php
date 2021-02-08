<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function __invoke() {
      return view ('libros');
    }
}
