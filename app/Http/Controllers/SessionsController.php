<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    public function login()   // 登录页面跳转
    {
        return view('sessions.login');
    }

    public function store(Request $request) //登录信息验证和处理
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
        return redirect()->intended(route('users.show',[Auth::user()]));
        // Auth::user() 方法来获取 当前登录用户 的信息，并将数据传送给路由
        // intended方法可将页面重定向到上一次请求尝试访问的页面上，并接收一个默认跳转地址参数，当上一次请求记录为空时，跳转到默认地址上。
        
       } else {
           // 登录失败后的相关操作
           session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
           return redirect()->back();
       }

       return;
    }

    public function destroy() //退出登录功能
    {
        Auth::logout();
        session()->flash('success', '您已成功退出！');
        return redirect('login');
    }

    public function __construct() //登录动作login()只允许未登录用户使用，注册动作限制在另一个控制器内
    {
        $this->middleware('guest', [
            'only' => ['login']
        ]);
    }
}
