<?php

use Faker\Generator as Faker;
// 用户模型工厂
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    // define 方法接收两个参数，第一个参数为指定的 Eloquent 模型类，
    // 第二个参数为一个闭包函数，该闭包函数 function (Faker $faker) 接收一个 Faker PHP 函数库的实例，
    // 让我们可以在函数内部使用 Faker 方法来生成假数据并为模型的指定字段赋值。
    $data_time = $faker->date . ' ' . $faker->time;
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'), // secret
        // 表达式 expr1 ?: expr3 --> 在 expr1 求值为 TRUE 时返回 expr1，否则返回 expr3
        // 有密码就用密码，没密码就默认secret为初始密码
        'remember_token' => str_random(10),
        'created_at' => $data_time,
        'updated_at' => $data_time,
    ];
});
