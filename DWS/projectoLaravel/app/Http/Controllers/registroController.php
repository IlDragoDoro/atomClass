<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registroModel;

class registroController extends Controller
{
    public function __invoke(){
      return view('registro');
    }

    public function visualizar(){
      return view('registro');
    }

    public function recogeDatos(Request $request){
      $data = $request->input();
      try{
        $person = new registroModel; //Creo un objeto del modelo registroModel para pasarle los parametros.
        $person->nombre=$data['nombre'];
        $person->apellidos=$data['apellidos'];
        $person->email=$data['email'];
        $person->usuario=$data['usuario'];
        $person->contrasenya=$data['contrasenya'];
        $person->bloggero=$data['blogger'];
        $person->save();
        return redirect()->to('/welcome');

      }catch(Exception $e){
        return $e;
      }
    }
}
