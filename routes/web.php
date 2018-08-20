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

Route::get('signup', 'UsersController@create')->name('signup');
// 因为我们在后面会为注册页面添加上表单注册功能，到时候表单提交请求会与数据库进行交互，
// 因此该页面并不能算静态页面，也就意味着我们不能再使用 StaticPagesController 来处理此动作