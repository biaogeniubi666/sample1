<!DOCTYPE html>
<html>
    <head>
      <title>@yield('title', 'Sample IOT') - GZID IOT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
        <!-- CSS Libs -->
        <link rel="stylesheet" type="text/css" href="/lib/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/lib/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/lib/css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="/lib/css/bootstrap-switch.min.css">
        <link rel="stylesheet" type="text/css" href="/lib/css/checkbox3.min.css">
        <link rel="stylesheet" type="text/css" href="/lib/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="/lib/css/dataTables.bootstrap.css">
        <link rel="stylesheet" type="text/css" href="/lib/css/select2.min.css">
        <!-- CSS App -->
        {{-- <link rel="stylesheet" href="/css/app.css"> --}}
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="/css/themes/flat-blue.css">
        <!-- Javascript CDN -->
        <script type="text/javascript" src="/lib/js/jquery.min.js"></script>
        <script type="text/javascript" src="/lib/js/bootstrap-switch.min.js"></script>
        <script type="text/javascript" src="/js/data.js"></script>
    
    </head>

    <body class="flat-blue login-page">
            <div class="container">
                <div class="login-box">
                    <div>
                        <div class="login-form row">
                            <div class="col-sm-12 text-center login-header">
                                <i class="login-logo fa fa-connectdevelop fa-5x"></i>
                                <h4 class="login-title">@yield('title', 'Sample IOT')</h4>
                            </div>
                            @include('shared._messages')<!-- 信息提示-->
                            @include('shared._errors')<!-- 信息提示-->
                            @yield('content')
                            <div>
                                    <!-- Javascript Libs -->
                                    <script type="text/javascript" src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
                                    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
                                    <script type="text/javascript" src="/lib/js/jquery.min.js"></script>
                                    <script type="text/javascript" src="/lib/js/bootstrap.min.js"></script>
                                    <script type="text/javascript" src="/lib/js/Chart.min.js"></script>
                                    <script type="text/javascript" src="/lib/js/bootstrap-switch.min.js"></script>
                                    <script type="text/javascript" src="/lib/js/jquery.matchHeight-min.js"></script>
                                    <script type="text/javascript" src="/lib/js/jquery.dataTables.min.js"></script>
                                    <script type="text/javascript" src="/lib/js/dataTables.bootstrap.min.js"></script>
                                    <script type="text/javascript" src="/lib/js/select2.full.min.js"></script>
                                    <script type="text/javascript" src="/lib/js/ace/ace.js"></script>
                                    <script type="text/javascript" src="/lib/js/ace/mode-html.js"></script>
                                    <script type="text/javascript" src="/lib/js/ace/theme-github.js"></script>
                                
                                    <!-- Javascript -->
                                    <script type="text/javascript" src="/js/app.js"></script>
                                    <script type="text/javascript" src="/js/index.js"></script>
                                    <script type="text/javascript" src="/js/data.js"></script>
                                    <script src="/js/echarts.common.min.js"></script>
                                    <script src="/js/echart.js"></script>
                                    <script src="/js/chalk.js"></script>
                                    <script src="/js/app.js"></script> 
    </body>	    				
</html>
                                