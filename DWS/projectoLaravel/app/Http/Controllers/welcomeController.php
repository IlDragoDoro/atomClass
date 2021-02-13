<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function __invoke(){
      return view('welcome');//devuelve la view welcome
    }

    public function guardar(){

    }
}
