@extends('layout.default')
@section('title', 'welcome!')
@section('content')
  <div class="jumbotron">
      <h1>GZID物联网平台</h1>
      <p class="lead">
        你现在所看到的是 <a href="https://laravel-china.org/courses/laravel-essential-training-5.1">GZID物联网平台</a> 的示例项目主页。
      </p>
      <p>
        一切，将从这里开始。
      </p>
      <p>
        <a class="btn btn-lg btn-success" href="{{ route('sp.index') }}" role="button">现在开始</a>
      </p>
    </div>
@stop