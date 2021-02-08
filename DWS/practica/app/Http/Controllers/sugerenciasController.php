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
      return view('sugerencias');
    }

    public function guarda(Request $request){
      $data = $request->input();
      $nombre = $data['nombre'];
      $email = $data['email'];
      $sugerencia=$data['sugerencia'];
      View::share('ver',$sugerencia);
      try{
        $mail = new sugerenciasMailable;
        Mail::to('destinatario@correo.com')->send($mail);
        return view('index');
      }catch(Exception $e){
        return $e;
      }
    }
}
