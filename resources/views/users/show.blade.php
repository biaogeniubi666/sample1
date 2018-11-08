@extends('layout.default1')
@section('title', $user->name)
@section('content')

<div class="container-fluid">
    <div class="side-body padding-top">     
        {{-- 个人中心页面内容 --}}
        <div class= "row  text-center">
          {{-- 局部页面中的局部页面引用方式 --}}
          <section class="user_info">
            {{-- {{ $user->name }} - {{ $user->email }} --}}
            @include('shared._user_info', ['user' => $user])
            {{-- 通过给 @include 方法传参，将用户数据以关联数组的形式传送到 _user_info 局部视图上。 --}}
          </section>    
        </div>
    </div>
</div>
    

@stop