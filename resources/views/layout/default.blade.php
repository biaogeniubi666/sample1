<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample IOT') - GZID IOT</title>
    <link rel="stylesheet" href="../css/app.css">
    <script src ="https://cdn.bootcss.com/jquery/1.10.2/jquery.min.js">
    </script> 
{{-- Laravel 在运行时，是以 public 文件夹为根目录的，
因此我们可以使用下面这行代码来为 Laravel 引入样式，
上面代码将引入 public/css/app.css 样式文件。 --}}
  </head>
    <body>
      @include('layout._header')
      {{-- 页面头部 --}}

      <div class="container">

        <div class="col-md-offset-1 col-md-10">
          @include('shared._messages')
          @yield('content')
          @include('layout._footer')
        </div>  
      </div>    
  </body>
</html>