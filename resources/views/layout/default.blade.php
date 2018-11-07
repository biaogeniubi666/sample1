<!DOCTYPE html>
<html>
  <head>
      <title>GZID Admin V.1 - GZID IOT666</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <!-- Fonts -->
      <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
      <!-- CSS Libs -->
      <link rel="stylesheet" type="text/css" href="../lib/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../lib/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="../lib/css/animate.min.css">
      <link rel="stylesheet" type="text/css" href="../lib/css/bootstrap-switch.min.css">
      <link rel="stylesheet" type="text/css" href="../lib/css/checkbox3.min.css">
      <link rel="stylesheet" type="text/css" href="../lib/css/jquery.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="../lib/css/dataTables.bootstrap.css">
      <link rel="stylesheet" type="text/css" href="../lib/css/select2.min.css">
      <!-- CSS App -->
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <link rel="stylesheet" type="text/css" href="../css/themes/flat-blue.css">

      <!-- Javascript CDN -->
      <script type="text/javascript" src="../lib/js/jquery.min.js"></script>
      <script type="text/javascript" src="../lib/js/bootstrap-switch.min.js"></script>
      <script type="text/javascript" src="../js/data.js"></script>
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
      <script src="/js/app.js"></script>
  </body>
</html>