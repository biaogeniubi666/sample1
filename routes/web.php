<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//  Laravel 中，我们可以通过在路由后面链式调用 name 方法来为路由指定名称
Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');



//用户管理路由
Route::resource('users','UsersController');
// Route::get('/users', 'UsersController@index')->name('users.index');
// Route::get('/users/create', 'UsersController@create')->name('users.create');
// Route::get('/users/{user}', 'UsersController@show')->name('users.show');
// Route::post('/users', 'UsersController@store')->name('users.store');
// Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
// Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
// Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');
// 该方法接收两个参数，第一个参数为资源名称，第二个参数为控制器名称。

//-------------------------------------------------------//
Route::resource('sp','SpController');

//显示动态数据和动态表格路由请求
Route::get('/getserial','SpController@shuaxin_ser'); //shuaxin_ser
Route::get('/gettem','SpController@shuaxin_tem');
Route::get('/gethum','SpController@shuaxin_hum');
Route::get('/gettem_and_hum_chart','SpController@shuaxin_chart');  // 表格数据采集

//开关控制LED灯路由请求
Route::get('/getup','SpController@lightup_control');
Route::get('/getdown','SpController@lightdown_control');

//第七章会话管理
Route::get('/signup', 'UsersController@signup')->name('signup'); //注册
Route::get('login', 'SessionsController@login')->name('login'); //登录
Route::post('login', 'SessionsController@store')->name('login'); //登录信息发送
Route::delete('logout', 'SessionsController@destroy')->name('logout'); //退出登录









