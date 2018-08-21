<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // 最小Eloquent模型
    protected $table = 'my_articles';
}
// 以上Article模型由php artisan make:model Models/Article -m创建
// 另外-m是创建数据库迁移文件（即对应用户模型Article的数据库表，默认为articles）
