<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\entradaModelo;

class indexController extends Controller
{
    public function __invoke(){
      return view('index'); //Devuelve la vista index
    }

    public function recogeEntrada(Request $request){ //Función que recoge y guarda las entradas:
      $data = $request->input();//Solicita la información de los inputs
      try{ //Hace un try
        $entrada = new entradaModelo; //Crea un nuevo modelo
        $entrada->contenido='<h3 style="margin-top:1%;background-color:grey;width:50%;">'.$data['contenido'].'</h3>'; //Mete en contenido la información
        $entrada->save(); //Guarda entarda en una base de datos
        return redirect()->to('/index'); //Te redirige al indice
      }catch(Exception $e){
        //En caso de error podría avisar o hacer algo
      }
    }

}
