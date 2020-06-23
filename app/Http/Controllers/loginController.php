<?php

namespace App\Http\Controllers;

use Auth;
use Socialite;
use App\User;
use Exception;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function login_dashboard(){
        return view('Dashboard.index');
    }

    public function postlogin(Request $request){
      if(Auth::attempt($request->only('email','password'))){
          return redirect('/Dashboard');
      }
      return redirect('/home');
    }

    public function logout(){
        Auth::logout();
        return redirect('/home');
    }

    // auth google
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }


    public function Callback(Request $request)
    {
        try {
    
            $user = Socialite::driver('google')->user();
     
            $finduser = User::where('google_id', $user->id)->first();
     
            if($finduser){
     
                Auth::login($finduser);
    
                return redirect('/Dashboard');
     
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
    
                Auth::login($newUser);
     
                return redirect('/Dashboard');
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
