<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registroModel;

class registroController extends Controller
{
    public function __invoke(){
      return view('registro'); //Devuelve la vist registro
    }

    public function visualizar(){ //devuelve la vista registro de nuevo sin invoke
      return view('registro');
    }

    public function recogeDatos(Request $request){ //Función de recogida de datos
      $data = $request->input(); //Pido la información de los inputs
      try{
        $person = new registroModel; //Creo un objeto del modelo registroModel para pasarle los parametros.
        $person->nombre=$data['nombre'];
        $person->apellidos=$data['apellidos'];
        $person->email=$data['email'];
        $person->usuario=$data['usuario'];
        $person->contrasenya=$data['contrasenya'];
        $person->bloggero=$data['bloggero'];
        //Recojo toda la información en variables
        $person->save(); //guardo el modelo
        return redirect()->to('/welcome'); //Redirecciono al login

      }catch(Exception $e){
        return $e; //en caso de error lo devuelve
      }
    }
}
