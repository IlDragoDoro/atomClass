<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailable;
use Illuminate\Http\Request;
use App\Mail\sugerenciasMailable;
use Illuminate\Support\Facades\Mail;

class sugerenciasController extends Controller
{
    public function __invoke(){
      return view('sugerencias'); //Devuelve la vista
    }

    public function guarda(Request $request){ //función para guardar la sugerencia
      $data = $request->input();//Pido los datos de los inputs
      $nombre = $data['nombre'];
      $email = $data['email'];
      $sugerencia=$data['sugerencia'];
      //He guardado toda la info en variables
      View::share('ver',$sugerencia); //Hago un share de la sugerencia
      try{
        $mail = new sugerenciasMailable; //creo un modelo
        Mail::to('destinatario@correo.com')->send($mail); //envio el mail
        return view('index'); //devuelvo la vista indice
      }catch(Exception $e){
        return $e; //si falla devuelvo el error
      }
    }
}
