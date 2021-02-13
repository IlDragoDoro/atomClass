<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\entradaModelo;

class indexController extends Controller
{
    public function __invoke(){
      return view('index');
    }

    public function recogeEntrada(Request $request){
      $data = $request->input();
      try{
        $entrada = new entradaModelo;
        $entrada->contenido='<h3 style="margin-top:1%;background-color:grey;width:50%;">'.$data['contenido'].'</h3>';
        $entrada->save();
        return redirect()->to('/index');
      }catch(Exception $e){

      }
    }

}
