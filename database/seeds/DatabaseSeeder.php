<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
// 加入Eloquent模型

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        Model::unguard();

        $this->call(UsersTableSeeder::class);
        // 在 DatabaseSeeder 中调用 call 方法来指定要运行假数据填充的文件

        Model::reguard();
    }
}
