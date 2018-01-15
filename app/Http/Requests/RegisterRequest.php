<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name'=>'required',
          'postalCode'=>'required|regex:/^[0-9]{3}-[0-9]{4}$/',//'bail|required|numeric|between:7,7',
          'address'=>'required',
          'phoneNum'=>'required|regex:/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/',
          'email'=>'bail|required|confirmed',
          'password'=>'bail|required|min:4|max:15|alpha_num|confirmed',
        ];
    }
//    public function messages(){
//      return [
//        'name.required'=>'required',
//        'メールアドレス'=>'required|confirmed',
        //'メールアドレス_confirmation'=>'required',
  //      'パスワード'=>'required|min:4|max:15|alpha_num|confirmed',
        //'パスワード_confirmation'=>'required|min:4|max:15|alpha_num',
//      ];
//    }
}
