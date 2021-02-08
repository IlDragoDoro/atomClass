<?php

namespace App\Http\Controllers;


use App\Models\RegisterStore;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;//From Htttp to use properly $request->input() line 41


class InicialController extends Controller
{
    public function __invoke(){
      return view ('inicial');
    }
    public function registro () {
      return view ('registro');
    }
    public function store (Request $request){
      //Rules to validate inputs of form
      $rules = [
        'name' => 'required|string|min:3|max:255',
        'lname' => 'required|string|min:3|max:255',
        'email' => 'required|string|email|min:3|max:255',
        'nick' => 'required|string|min:3|max:255',
        'pass' => 'required|string|min:3|max:255'
      ];
      //make a validator to validate request to all
      $validator = Validator::make($request->all(),$rules);
      if ($validator->fails()) {
        // code...
        return "ha fallado el validator";
        return redirect('registro')
        ->withInput()
        ->withErrors($validator);

      }
  //    else {
        $data = $request->input();
        try {//try to insert data in db
          $usuario = new RegisterStore;//create a model
          $usuario->name = $data['name'];
          $usuario->lname = $data['lname'];
          $usuario->email = $data['email'];
          $usuario->nick = $data['nick'];
          $usuario->pass = $data['pass'];
          if (isset($request->bloguer)){
            $usuario->bloguer = true;
            $data['bloguer'] = true;
          }
          $usuario->save();
          return redirect('/')->with('status', "Insert sucessfully");
        } catch (\Exception $e) {
          return "Ha fallado en ".$e;
          return redirect('registro')->with('failed',"operation failed");
        }

      //}
    }

}
