<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 在 up 方法里面，我们通过调用 Schema 类的 create 方法来创建 users 表：
        // create 方法会接收两个参数：一个是数据表的名称，另一个则是接收 $table（Blueprint 实例）的闭包。
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            // 由 increments 方法创建了一个 integer 类型的自增长 id
            $table->string('name');

            $table->string('email')->unique();
            // 由 string 方法创建了一个 email 字段，且在最后指定该字段的值为唯一值，用于保存用户邮箱。

            $table->string('password');

            $table->rememberToken();
            // 由 rememberToken 方法为用户创建一个 remember_token 字段，用于保存『记住我』的相关信息。

            $table->timestamps();
            // 由 timestamps 方法创建了一个 created_at 和一个 updated_at 字段，
            // 分别用于保存用户的创建时间和更新时间。
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // down 方法会在回滚命令发起时被调用，是 up 方法的逆向操作。
    // 在上面的代码中，up 创建了 users 表，那么这里将会通过调用 Schema 的 drop 方法来删除 users 表。
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
// 当我们运行迁移时，up 方法会被调用；
// 当我们回滚迁移时，down 方法会被调用。
