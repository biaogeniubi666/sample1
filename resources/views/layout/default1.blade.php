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
    <body class="flat-blue">
        <div class="app-container">
                <div class="row content-container">
                    @include('shared._messages')<!-- 信息提示-->
                    @include('layout._navbar')<!-- 头部导航栏-->
                    @include('layout._sidebar')<!-- 左侧导航栏-->
                    @yield('content')<!-- 页面主内容-->
                    @include('layout._footer1')<!-- 页脚-->
                    <div>
                        <!-- Javascript Libs -->
                        <script type="text/javascript" src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
                        <script type="text/javascript" src="https://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
                        <script type="text/javascript" src="../lib/js/jquery.min.js"></script>
                        <script type="text/javascript" src="../lib/js/bootstrap.min.js"></script>
                        <script type="text/javascript" src="../lib/js/Chart.min.js"></script>
                        <script type="text/javascript" src="../lib/js/bootstrap-switch.min.js"></script>
                        <script type="text/javascript" src="../lib/js/jquery.matchHeight-min.js"></script>
                        <script type="text/javascript" src="../lib/js/jquery.dataTables.min.js"></script>
                        <script type="text/javascript" src="../lib/js/dataTables.bootstrap.min.js"></script>
                        <script type="text/javascript" src="../lib/js/select2.full.min.js"></script>
                        <script type="text/javascript" src="../lib/js/ace/ace.js"></script>
                        <script type="text/javascript" src="../lib/js/ace/mode-html.js"></script>
                        <script type="text/javascript" src="../lib/js/ace/theme-github.js"></script>
                    
                        <!-- Javascript -->
                        <script type="text/javascript" src="../js/app.js"></script>
                        <script type="text/javascript" src="../js/index.js"></script>
                        <script type="text/javascript" src="../js/data.js"></script>
                        <script src="../js/echarts.common.min.js"></script>
                        <script src="../js/echart.js"></script>
                        <script src="../js/chalk.js"></script>
                    </div><!-- JS文件导入-->
    </body>	    				
</html>