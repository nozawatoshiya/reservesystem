<?php

namespace App;

use Ngt\Larafm\Database\Model;


class Reserved extends Model
{
    public $timestamps = false;
    protected $layoutName = '予約';
    protected $primaryKey = 'RecID';
    protected $fillable = [
        '日付',
        '時間',
        'メールアドレス',
    ];
    protected $hidden = ['メールアドレス','シーケンス'];
}
