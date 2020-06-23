<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index(){
     return view('Register.index');
    }

    public function create(Request $request){
      if($request->password != $request->password){
          \Session::flash('error','Password Tidak Sama !');
          return redirect('/Register');
        }

        $data = [
            'name' => $request->name,
            'email' =>$request->email,
            'password'=> \Hash::make($request->password)
        ];
        User::create($data);
        return redirect('/Register');

    }
}
