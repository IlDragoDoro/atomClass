<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class biografiaController extends Controller
{
    public function __invoke(){
      return view('biografia');
    }
}
