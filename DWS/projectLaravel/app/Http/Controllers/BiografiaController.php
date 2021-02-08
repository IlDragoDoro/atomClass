<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiografiaController extends Controller
{
    public function __invoke() {
      return view ('estaticaBio');
    }
}
