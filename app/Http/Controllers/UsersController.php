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
}

/* 
1.路由声明时必须使用 Eloquent 模型的单数小写格式来作为路由片段参数，User 对应 {user}：
Route::get('/users/{user}', 'UsersController@show')->name('users.show');
在使用资源路由 Route::resource('users', 'UsersController'); 时，默认已经包含了上面的声明。

控制器方法传参中必须包含对应的 Eloquent 模型类型声明，并且是有序的：
 public function show(User $user)
 {   return view('users.show', compact('user'));   }

当请求 http://sample.test/users/1 并且满足以上两个条件时，
Laravel 将会自动查找 ID 为 1 的用户并赋值到变量 $user 中，
如果数据库中找不到对应的模型实例，会自动生成 HTTP 404 响应。
*/




