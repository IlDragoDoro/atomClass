<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginModel;
class loginController extends Controller
{
    public function login(Request $request){
      $data = $request->input();
      try{
        $usuarios=loginModel::all();//Cojo todos los datos devueltos por el modelo
        foreach($usuarios as $user){ //para cada uno de los datos del modelo ''as user''
            if($data['usuario'] == $user->usuario && $data['contrasenya'] == $user->contrasenya){
              $request->session()->put('bloggero',$user->bloggero);
              return view('index');
            }
        }
      }catch(Exception $e){
        return $e;
      }
    }

public function sesion(Request $request){
  $data = $request->session()->all();
  return $data;
}

}
