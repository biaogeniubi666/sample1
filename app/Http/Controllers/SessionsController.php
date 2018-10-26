<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
       $credentials = $this->validate($request, [
           'email' => 'required|email|max:255',
           'password' => 'required'
       ]);

       if (Auth::attempt(($credentials),$request->has('remember'))) {
        //Auth 的 attempt 方法可以让我们很方便的完成用户的身份认证操作，但要在开头使用use Auth;
        // if (Auth::attempt(['email' => $email, 'password' => $password])) {
        // 该用户存在于数据库，且邮箱和密码相符合}
        // 登录成功后的相关操作
        session()->flash('success', '欢迎回来！');
        return redirect()->route('users.show',[Auth::user()]);
        // Auth::user() 方法来获取 当前登录用户 的信息，并将数据传送给路由
       } else {
           // 登录失败后的相关操作
           session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
           return redirect()->back();
       }

       return;
    }
}
