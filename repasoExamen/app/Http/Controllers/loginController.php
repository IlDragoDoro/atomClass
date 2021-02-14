<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginModel;

class loginController extends Controller
{
    public function inicioSesion(Request $request){
      $data = $request -> input();

try{
  $usuarios=loginModel::all(); //Cojo todos los datos devueltos por el modelo
  foreach($usuarios as $user){ //para cada uno de los datos del modelo ''as user''
      if($data['usuario'] == $user->usuario && $data['password'] == $user->password){//Si coinciden los datos
        $request->session()->put('bloggero',$user->bloggero); //Solicita una sesión
        return view('index'); //Devuelve la vista index
      }
  }

}catch(Exception $e){
return $e;
}

    }
}
