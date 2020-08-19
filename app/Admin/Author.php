<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //定义关联数据表
    protected $table = 'author';

    //禁用时间字段
    public $timestamps = flase;
}
