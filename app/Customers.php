<?php

namespace App;

use Ngt\Larafm\Database\Model;

class Customers extends Model
{
    public $timestamps = false;
    protected $layoutName = '顧客';
    protected $primaryKey = 'RecID';
    protected $fillable = [
      '氏名',
      '郵便番号',
      '住所',
      '電話番号',
      '建物',
      'メールアドレス',
      'パスワード'
    ];
    protected $hidden = ['メールアドレス'];
}
