<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
      return view('welcome');
    }

    public function welcome(Request $request){
      $flag = $request['flag'];

      if($flag == 'ログイン'){
        return redirect('/login');
      }elseif($flag == '会員登録'){
        return redirect('/regist');
      }
    }
    public function regist(){
       return view('auth.register');

    }
    public function login(){
      return view('auth.login');

    }
    public function logout(){
      \Session::flush();
      return redirect()->route('top');

    }

}
