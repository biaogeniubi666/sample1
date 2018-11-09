<!DOCTYPE html>
<html>

<head>
    <title>登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <!--<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs 
    <link rel="stylesheet" type="text/css" href="../../lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../lib/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../lib/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="../../lib/css/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="../../lib/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="../../lib/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../../lib/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../lib/css/select2.min.css">
    <!-- CSS App 
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/themes/flat-blue.css">-->

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
                        <h4 class="login-title">登录</h4>
                    </div>
                    <div class="col-sm-12">
                        <div class="login-body">
                            <div class="progress hidden" id="login-progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    Log In...
                                </div>
                            </div>
                            @include('shared._errors')
          
                            <form method="POST" action="{{ route('login') }}">
                                {{-- 我们在路由表单中清楚的指明了使用 POST 动作来提交用户的登录信息，
                                    因此 Laravel 会自动将该请求映射到会话控制器的 store 动作上。 --}}
                                {{ csrf_field() }}
                      
                                <div class="form-group">
                                  <label for="email">邮箱：</label>
                                  <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                                </div>
                      
                                <div class="form-group">
                                  <label for="password">密码：</label>
                                  <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                                </div>
            
                                <div class='checkbox'>
                                  <label><input type="checkbox"  name="remember">记住我</label>
                                </div>
                              <button type="submit" class="btn btn-primary">登录</button>
                            </form>
                        </div>
                        
                        <div class="login-footer">
                            <p class="text-right"><a href="#" class="color-white">Forgot password？</a></p>  
                            <p class="color-white">还没账号？<a href="{{ route('signup') }}">现在注册！</a></p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript Libs 
    <script type="text/javascript" src="../../lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../lib/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../lib/js/Chart.min.js"></script>
    <script type="text/javascript" src="../../lib/js/bootstrap-switch.min.js"></script>
    
    <script type="text/javascript" src="../../lib/js/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="../../lib/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../../lib/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="../../lib/js/select2.full.min.js"></script>
    <script type="text/javascript" src="../../lib/js/ace/ace.js"></script>
    <script type="text/javascript" src="../../lib/js/ace/mode-html.js"></script>
    <script type="text/javascript" src="../../lib/js/ace/theme-github.js"></script>
    Javascript
    <script type="text/javascript" src="../../js/app.js"></script> -->

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
        </div>
</body>

</html>