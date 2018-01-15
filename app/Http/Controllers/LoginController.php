<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Customers;


class LoginController extends Controller
{
  public function loginCheck(LoginRequest $request){
    $input = $request->all();

    $email = str_replace('@','\@',$input['email']);

    $pass = $input['password'];
//    dd($id,$pass);
    $result = Customers::where('メールアドレス',$email)->where('パスワード',$pass)->get();

//    dd($result->氏名);
    if(!$result->isempty()){
      $name = $result[0]->氏名;
      $email = $result[0]->メールアドレス;

      \Session::put('name',$name);
      \Session::put('email',$email);

      return redirect()->route('home');
      //return view('home');
    }else{
      return redirect()->route('login');
      //return view('Auth.login');
    }
  }
}
