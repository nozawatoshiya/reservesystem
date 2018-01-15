<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Customers;

class RegistController extends Controller
{
    public function registCheck(RegisterRequest $request){
      $input = $request->all();

      $email = str_replace('@','\@',$input['email']);
      //dd($id);
      $result = Customers::where('メールアドレス',$email)->get();

      if(!$result->isempty()){
        $message = '入力されたメールアドレスはすでに登録されています。';
        \Session::flash('error',$message);
        return redirect()->route('regist');
        //return view('home');
      }else{
        $params = array('氏名'=>$input['name'],
                        '郵便番号'=>$input['postalCode'],
                        '住所'=>$input['address'],
                        '建物'=>$input['building'],
                        '電話番号'=>$input['phoneNum'],
                        'メールアドレス'=>$input['email'],
                        'パスワード'=>$input['password'],
                  );

        $result = Customers::create($params);

        $message = '登録完了しやした！ログイン画面からログインしてください。';
        \Session::flash('success',$message);

        return redirect()->route('regist');
        //return view('Auth.login');
      }
    }
}
