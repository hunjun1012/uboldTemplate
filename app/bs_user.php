<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class bs_user extends Model
{
    //
    protected $fillable = [
        'group_cd', 'user_id', 'user_pwd', 'user_name', 'level', 'use_yn', 'regdate', 'chgdate','favornoise','noisedur','alarmtype','workstime','worketime'
    ];

}
