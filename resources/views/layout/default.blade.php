<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample IOT') - GZID IOT</title>
    <link rel="stylesheet" href="/css/app.css">
    {{-- Laravel 在运行时，是以 public 文件夹为根目录的，
      因此我们可以使用下面这行代码来为 Laravel 引入样式，
      上面代码将引入 public/css/app.css 样式文件。 --}}
  </head>
  <body>

    {{-- <header class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="col-md-offset-1 col-md-10">
          <a href="/" id="logo">Sample IOT</a>
          <nav>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/help">帮助</a></li>
              <li><a href="#">登录</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    以上html代码由_header.blade.php完成 --}}

    @include('layout._header')
   

    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        @yield('content')
        @include('layout._footer')
    </div>    
  </body>
</html>