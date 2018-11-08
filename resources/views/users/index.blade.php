@extends('layout.default1')
@section('title', '所有用户')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <h1>所有用户</h1>
  <ul class="users">
    @foreach ($users as $user)
    {{-- @foreach 的方法将所有用户的数据逐个输出 --}}
      @include('users._user')
    @endforeach
  </ul>

  {!! $users->render() !!}
  {{-- 由 render 方法生成的 HTML 代码默认会使用 Bootstrap 框架的样式，
    渲染出来的视图链接也都统一会带上 ?page 参数来设置指定页数的链接。 --}}
</div>    
@stop