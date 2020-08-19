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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Admin/Admin/login', 'Admin\AdminController@login');

//缓存路由
Route::get('/Admin/Test/huancun', 'Admin\TestController@huancun');

//路由传参
Route::any('/Admin/Test/chuancan{id}', function ($id) {
    return "当前ID是" . $id;
});

//通过?号形式传递get参数
Route::any('/Admin/Test/chuan', function() {
    echo "当前用户ID为:". $_GET['id'];
});

Route::get('/Admin/Login/login', 'Admin\LoginController@login');
Route::get('/Admin/Login/lst/{id}', function($id){
    return '当前ID为:' . $id;
});

//不需要在路由规则里填写传参
Route::get('/Admin/Login/wenhao', function(){   //http://www.lvs.com/index.php/Admin/Login/wenhao?id=100
    echo "传进来的ID为:" . $_GET['id'];
});

Route::get('/Admin/Login/gdata','Admin\LoginController@gdata');


//实现AdminLogin控制器里的增删改查路由
Route::get('Admin/Login/add', 'Admin\LoginController@add');
Route::get('Admin/Login/del', 'Admin\LoginController@del');
Route::get('Admin/Login/update','Admin\LoginController@update');
Route::get('Admin/Login/select', 'Admin\LoginController@select');

Route::get('Admin/Login/showtime', 'Admin\LoginController@showtime');
Route::get('Admin/Login/showlist', 'Admin\LoginController@showlist');
//模版继承
Route::get('Admin/Login/moban', 'Admin\LoginController@moban');

//CSRF验证
Route::get('Admin/Login/showform', 'Admin\LoginController@showform');
Route::get('Admin/Login/csrf', 'Admin\LoginController@csrf');

//模型的增删改查
Route::get('Admin/Login/addweb', 'Admin\LoginController@addweb');
Route::get('Admin/Login/useradd', 'Admin\LoginController@useradd');

//自动验证(二合一方法，自己提交给自己)
Route::any('Admin/Login/yanzheng', 'Admin\LoginController@yanzheng');

//文件上传
Route::any('Admin/Login/upload', 'Admin\LoginController@upload');

//数据分页
Route::any('Admin/Login/fenye', 'Admin\LoginController@fenye');

//cache缓存
Route::any('Admin/Login/huancun', 'Admin\LoginController@huancun');

//连表查询
Route::get('Admin/Login/lianbiao', 'Admin\LoginController@lianbiao');

//关联模型
//一对一模型
Route::get('Admin/Login/onetoone', 'Admin\LoginController@onetoone');
//一对多模型
Route::get('Admin/Login/onetomore', 'Admin\LoginController@onetomore');
//多对多模型
Route::get('Admin/Login/moretomore', 'Admin\LoginController@moretomore');
