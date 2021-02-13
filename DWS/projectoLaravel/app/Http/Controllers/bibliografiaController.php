<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bibliografiaController extends Controller
{
    public function __invoke(){
      return view('bibliografia'); //Devuelve la vista bibliografia
    }
}
