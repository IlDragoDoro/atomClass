<?php

namespace App\Http\Controllers;

use App\Models\EntradaStore;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;//From Htttp to use properly $request->input() line 41

class saveBlog extends Controller
{
    //
    public function saveIt(Request $request) {
      $rules = [
        'content' => 'required|string|min:10|max:255',
      ];

      $validator = Validator::make($request->all(),$rules);
    /*  if ($validator->fails()) { comprobar porqeu falla
        // code...
        return "ha fallado el validator";
        return redirect('main')
        ->withInput()
        ->withErrors($validator);

      }*/
  //    else {
        $data = $request->input();
        try {//try to insert data in db
          $entrada = new EntradaStore;//create a model
          $entrada->content = $data['content'];

          $entrada->save();
          return redirect('main')->with('status', "Blog inserted sucessfully");
        } catch (\Exception $e) {
          return "Ha fallado en ".$e;
          return redirect('main')->with('failed',"Blog insert failed");
        }
    }
}
