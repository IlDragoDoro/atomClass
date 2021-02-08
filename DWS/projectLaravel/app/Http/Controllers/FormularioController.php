<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\EntradaStore;
use Request;//On separarate file to use properly diferents Request

class FormularioController extends Controller
{
  public function __invoke() {

  }
  public function comprueba() {//check if user and pass is register on db
    //$item = RegisterStore::all();
    try{
    $name = Request::input('name');
    $pass = Request::input('pass');

    $usrtest = [
      'name'=>$name,
      'pass'=>$pass
    ];
    $ortest = [
      'email'=>$name,
      'pass'=>$pass
    ];

    $row = DB::table('usuarios')
    ->where($usrtest)
    ->orWhere($ortest)
    ->first();

    $bdname = $row->nick;
    $bdid = $row->id;
    $bdpass = $row->pass;
    $bdemail = $row->email;
    $bdblog = $row->bloguer;

    if (($name == $bdname && $pass == $bdpass)|| ($name == $bdemail && $pass == $bdpass)) {
$data = EntradaStore::all();// we declare this outside to use it on both bloguer/user
      if($bdblog){//if user is bloger
        //we use this first here, because if we not use Here
        //we got a fail when we try to login with bloguer user
        //return view('/main',['entradas'=>$data]);
        $val = session(['valor'=>$bdblog]);//We set an global var to set on view if BLOGGER OR normal user
        //we use it because when we link to main it'll use it this,
        //instead, the value of session will dissapear after update
          return view('/main')// FINALLY WE USE THIS, CUZ OTHER WE GOT SOME RANDOM ERRORS
          ->with('valor', $bdblog)//SO WE FIND THIS SOLUTION TO get entries from login too
          ->with(['entradas'=>$data]);
      }else{return redirect('/main')
        ->with('valor', $bdblog)
        ->with(['entradas'=>$data]);}

    }return view('/');
  }catch(Exception $e){
    return "Algo falló en: ".$e;
  }
    //return view ('comprueba', ['usuarios'=>$item]);
  }
  public function main (){
    //we save all data about entrada model
    $data = EntradaStore::all();// we use this here again to use on urls
    return view('/main',['entradas'=>$data]); //trhen we pass $data to view

  }

}
