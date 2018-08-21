<?php

// 要记得全局搜索，将App\User 替换为 App\Models\User
namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    // 在 Eloquent 模型中借助对 table 属性的定义，来指明要进行数据库交互的数据库表名称
    // Eloquent模型约定默认情况下如果是User为用户模型文件名称，则数据表名为小写加复数，即users
    // 当然可以改成其他你希望指定的数据表
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
