<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "WelcomeController@index")->name('top');
Route::post('/welcome', "WelcomeController@welcome")->name('welcome');
Route::get('/regist','WelcomeController@regist' )->name('regist');
Route::post('/regist','RegistController@registCheck' )->name('registCheck');

Route::get('/login','WelcomeController@login' )->name('login');
Route::post('/login','LoginController@loginCheck' )->name('loginCheck');

Route::group(['middleware'=>['loginCheck']],function(){
  Route::get('/home', 'HomeController@index')->name('home');

  Route::post('/reserved','ReservedController@regist')->name('reservedregist');
  Route::post('/edit','ReservedController@edit')->name('reservededit');

  Route::get('/logout','WelcomeController@logout')->name('logout');
});
