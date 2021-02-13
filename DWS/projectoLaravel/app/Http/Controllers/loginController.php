<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginModel;
class loginController extends Controller
{
    public function login(Request $request){ //Función para iniciar sesión
      $data = $request->input(); //Pido la información a los inputs
      try{ //bloque try
        $usuarios=loginModel::all(); //Cojo todos los datos devueltos por el modelo
        foreach($usuarios as $user){ //para cada uno de los datos del modelo ''as user''
            if($data['usuario'] == $user->usuario && $data['contrasenya'] == $user->contrasenya){//Si coinciden los datos
              $request->session()->put('bloggero',$user->bloggero); //Solicita una sesión
              return view('index'); //Devuelve la ista index
            }
        }
      }catch(Exception $e){
        return $e; //En caso de error lo devuelve
      }
    }

public function sesion(Request $request){ //Función de sesión
  $data = $request->session()->all(); //Pide los datos de las sesiones
  return $data; //devuelve los datos
}

}
