<?php

// 要记得全局搜索，将App\User 替换为 App\Models\User
namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ResetPassword;

class User extends Authenticatable
{
    use Notifiable;
    // protected $table = 'users';
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

    public static function boot()
    // boot 方法会在用户模型类完成初始化之后进行加载，因此我们对事件的监听需要放在该方法中。
    {
        parent::boot();

        static::creating(function ($user) {
            $user->activation_token = str_random(30);
        });
    }

    /*
    该方法主要做了以下几个操作：
    1.为 gravatar 方法传递的参数 size 指定了默认值 100；
    2.通过 $this->attributes['email'] 获取到用户的邮箱；
    3.使用 trim 方法剔除邮箱的前后空白内容；
    4.用 strtolower 方法将邮箱转换为小写；
    5.将小写的邮箱使用 md5 方法进行转码；
    6.将转码后的邮箱与链接、尺寸拼接成完整的 URL 并返回；
    */

    public function gravatar($size = '100')
    {
        $hash = md5(strtolower(trim($this->attributes['email'])));
        return "http://www.gravatar.com/avatar/$hash?s=$size";
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }
}
