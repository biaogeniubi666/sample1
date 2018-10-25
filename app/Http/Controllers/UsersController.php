<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\User;  
// 加上用户模型文件路径，才能找到User
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }
    // show() 方法传参时声明了类型 —— Eloquent 模型 User，
    // 对应的变量名 $user 会匹配路由片段中的 {user}，
    // 这样，Laravel 会自动注入与请求 URI 中传入的 ID 对应的用户模型实例(ID:1)。

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);
        
        $user = User::create([ 
            // 用户模型User::create()可以将信息写入数据库
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        session()->flash('success', '欢迎，您将在这里开启一段新的旅程~');
        // 临时保存用户数据的方法 - 会话（Session）
        // session() 方法来访问会话实例，flash方法为存入一条缓存的数据，在下一次请求内生效。
        // 之后我们可以使用 session()->get('success') 通过键名来取出对应会话中的数据，取出的结果为 欢迎，您将在这里开启一段新的旅程~。
        
        return redirect()->route('users.show', [$user]);
       // $user 是 User 模型对象的实例。route() 方法会自动获取 Model 的主键，也就是数据表 users 的主键 id 
    }
}






