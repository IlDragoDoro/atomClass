<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarioModel;

class registroController extends Controller
{
    public function registro(){
      return view('registro'); //Devuelvo la vista registro
    }

    public function recoger(Request $request){
      $data = $request->input(); //Solicito los datos de los inputs
      try{
        $user = new usuarioModel;
        $user->usuario=$data['usuario'];
        $user->email=$data['email'];
        $user->password=$data['password'];
        $user->bloggero=$data['bloggero'];
        $user->save();

      }catch(Exception $e){
        return $e;
      }

      return view('welcome');
    }
}
