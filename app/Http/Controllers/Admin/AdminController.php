<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //管理员登录页面
    public function login(){
        return view('admin.admin.login');
    }

    public function chuancan(){
        
    }

    public function data(){

    }
}
