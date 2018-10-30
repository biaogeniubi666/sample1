<?php

use Illuminate\Database\Seeder;
use App\Models\User;
// 记得加上用户模型
// 用户填充文件
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        // factory(User::class)来自UserFactory.php的define 方法
        // times 和 make 方法是由 FactoryBuilder 类 提供的 API。
        // times 接受一个参数用于指定要创建的模型数量，make 方法调用后将为模型创建一个 集合。
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());
        // akeVisible 方法临时显示 User 模型里指定的隐藏属性 $hidden，
        // insert 方法来将生成假用户列表数据批量插入到数据库中。
        
        
        $user = User::find(1);
        $user->name = 'Aufree';
        $user->email = 'aufree@yousails.com';
        $user->password = bcrypt('password');
        $user->is_admin = true;
        // 设置ID为1的用户为管理员
        $user->save();
        
        //创建指定用户并设为管理员，保存于ID1
    }
}
