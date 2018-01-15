<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserved;


class HomeController extends Controller
{
    public function index()
    {
      $email = \Session::get('email');

      $result = Reserved::where('メールアドレス',$email)->orderBy('日付','desc')->orderBy('時間','desc')->paginate(10);
      $count = Reserved::where('メールアドレス',$email)->count();

//dd($result);

//      $result = $result->sortByDesc('日付');
//dd($result->sortByDesc('日付'));

        return view('home',compact('result','count'));
    }
}
