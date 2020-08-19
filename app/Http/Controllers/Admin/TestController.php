<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//引入Cache
use Cache;

class TestController extends Controller
{
    //缓存操作
    public function huancun(){
        //设置一个缓存,如果存在同名则覆盖
        Cache::put('class', 'leonie', 10);
        Cache::put('class', 'jieli', 10);
        //设置一个缓存，但是存在同名不添加
        Cache::add('class','100', 10);
        //永久存储
        Cache::forever('name','leonie', 10);
        //获取指定的值
        echo Cache::get('name');
        //获取指定的值，如果不存在，则使用默认值替换
        echo Cache::get('sign', '这个家伙很懒，什么没有留下...');
        //通过回调函数的方式来返回默认值
        echo Cache::get('', function(){
            return date('Y-m-d H:i:s', time());
        });

        //判断某个值是否存在
        var_dump(Cache::has('time'));
        //使用一次性方法实现一次性存储
        var_dump(Cache::pull('username'));
        //直接删除某一个值
        Cache::forget('addr');

        //递增递减的实现
        Cache::add('count', 0, 100);
        Cache::increment('count');
        Cache::increment('count', 10);  //步长，第次加10次；
        //设置默认时间
        Cache::remember('time', 100, function(){
            return date('Y-m-d H:i:s', time());
        });
    }
}
