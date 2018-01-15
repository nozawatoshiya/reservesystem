<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserved;

class ReservedController extends Controller
{
    public function regist(Request $request){
      $input =$request->all();

      $params = array('日付'=>date('m/d/Y',strtotime($input['date'])),
                      '時間'=>$input['time'],
                      'メールアドレス'=>\Session::get('email'),
                );
//dd($params);
      $result = Reserved::create($params);
          //dd($result);
      return redirect()->route('home');
    }
    public function edit(){

    }
}
