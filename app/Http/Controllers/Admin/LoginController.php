<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//引入Member模型
use App\Admin\Member;
//引入article模型
use App\Admin\Article;
//引入cache缓存
use Cache;

class LoginController extends Controller
{
    //login
    public function login(){
        return "leonie login...";
    }

    public function lst(){
        $id = 100;

    }

    public function wenhao(){

    }

    //获取用户的输入
    public function gdata(Request $request){
        //$data = $request->all();    //获取所有get请求的数据;

    }

    public function add(){
        $data = DB::table('member');
 //       $res = $data -> insert([
//            [
//                'name' => 'leonie',
//                'age' => '30',
//                'email' => 'admin@lvs.com'
//            ],
//            [
//                'name' => 'lihuang',
//                'age' => '30',
//                'email' => 'lihuang@lvs.com'
//            ],
//       ]);

        //插入一条记录
        $res = $data -> insertGetId([
            'name' => 'huangli',
            'age' => '31',
            'email' => 'huangli@lvs.com'
            ]);
        var_dump($res);
    }

    public function del(){
        return "del...";
    }

    public function update(){
    return "update...";
}

    public function select(){
        $data = DB::table('member');
//        $res = $data -> get();
//        foreach ($res as $key=> $value) {
//            echo "id是:{$value -> id}名字是:{$value-> name}邮箱是:{$value->email}</br>";
//        }
        $res = $data ->where('id', '2')->first();
        echo "id:{$res -> id}用户:{$res -> name}邮箱:{$res ->email}";

    }

    public function showtime(){

        $date = date('Y-m-d H:i:s', time());
        $day = strtotime('+1 year');
        return view('admin.admin.showtime', compact('date', 'day'));
    }

    //获取所有数据信息
    public function showlist(){
        $db = DB::table('member');
        $data = $db -> get();
        return view('admin.admin.showlist', compact('data'));
    }

    //模版的继承
    public function moban(){
        return view('public.admin.content');
    }

    //展示表单
    public function showform(){

        //return view('admin.admin.showform');
    }

    //CSRF验证
    public function csrf(){
        return view('admin.admin.csrf');
    }

    //以下为模型的增删改查
    public function addweb(){
        return view('admin.admin.addweb');
    }

    public function useradd(Request $request){
        $data = $request->all();
        var_dump($data);
    }

    //模型查询
    public function mshowlist(){

    }

    //自动验证
    public function yanzheng(Request $request){
        //判断请求类型
        if($request->isMethod('post')) {
            $this -> validate($request, [
                'name' => 'required|min:2|max:20',
                'age' => 'required|integer|min:1|max:100',
                'email' => 'required|email',
            ]);
        }
        //展示视图
        return view('admin.admin.yanzheng');
    }

    //上传文件
    public function upload(Request $request){
        //请求的类型
        if($request -> isMethod('post')) {
            //上传
            //判断文件是否正常
            //if($request -> hasFile('avatar') && $request ->file('avatar')->isValid()) {
            //获取文件的原始名称
            //$original = $request->file('avatar')->getClientOriginalName();
            //获取文件的大小
            //$fileSize = $request->file('avatar') -> getClintSize();
            //判断文件的后缀
            //$fileExtension = $request ->file('avatar')->getClientOriginalExtension();
            //获取文件真实的后缀
            //$fileMime = $request -> file('avatar') -> guessClientExtension();
            //return $fileMime;
            //文件上传;
//                $data = $request->all();
//                var_dump($data);
            //$request -> file('avatar') -> move('./uploads', md5(time().rand(100000, 999999)). '.' . $request->file('avatar') -> getClientOriginalExtension());

            //------------------------------以下正式代码--------------------------------------------------------------
            //判断文件是否存在并且是否正常
            if($request ->hasFile('avatar') && $request->file('avatar')->isValid()) {
                //判断文件大小
                if($request->file('avatar')->getClientSize() > 2048) {
                    //判断文件格式是否正确
                    $imgArr = array('bmp', 'jpeg', 'gif', 'tiff', 'png', 'jpg');
                    if(in_array($request->file('avatar') ->getClientOriginalExtension(),$imgArr)) {
                        //
                        echo "检测文件格式OK...";
                    } else {
                        return '请检查文件格式...';
                    }
                } else {
                    return "文件过大...";
                }
            }

        } else {
            //展示视图
            return view('admin.admin.upload');
        }
    }

    public function fenye(){
        $db = DB::table('member');
//        $data = $db->paginate();
        $data = $db -> paginate(2);
        return view('admin.admin.fenye', compact('data'));
    }
    //cache缓操作
    public function huancun(){
        //设置一个缓存，如果存在同名则覆盖
        Cache::put('MIS', 'leonie', 10);
        Cache::put('MIS', 'nieguoye', 10);
        //设置一个缓存，但是存在同名不添加
        Cache:add('addr', '天安数码城', 10);
        //永久存储
        Cache::forever('username', 'yaoting');
        //获取指定的值
        echo Cache::get('username');
    }

    public function lianbiao(){
      $data = DB::table('article as t1') -> select('t1.id', 't1.article_name', 't2.author_name') -> leftJoin('author as t2', 't1.author_id', '=', 't2.id') -> get();
      var_dump($data);
    }

    //关联模型一对一操作
  public function onetoone(){
    //查询数据
    $data = \App\Admin\Article::get();
    // var_dump($data);
    foreach($data as $value){
      echo "id:{$value -> id}&nbsp;文章名称:{$value -> article_name}&nbsp;<br>";
    }
  }

  //一对多模型的操作
  public function onetomore(){
    $data = \App\Admin\Article::get();
    // var_dump($data);
    //遍历数据
    foreach($data as $val) {
      echo "id:{$val -> id}&nbsp;文章名称:{$val -> article_name}&nbsp;文章的评论:<br>";
      foreach ($val-> comment as $txt) {
        echo "{$txt -> comment}<br>";
      }
    }
  }

  //多对多模型
  public function moretomore(){
    //查询数据
    $data = \App\Admin\Article::get();
    var_dump($data);

  }
}
