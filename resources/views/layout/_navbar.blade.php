<nav class="navbar navbar-default navbar-fixed-top navbar-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-expand-toggle">
                <i class="fa fa-bars icon"></i>
            </button>
            <ol class="breadcrumb navbar-breadcrumb">
                <li class="active">GZID万岁</li>
            </ol>
            <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                <i class="fa fa-th icon"></i>
            </button>
        </div>
        
        <ul class="nav navbar-nav navbar-right">
            @if (Auth::check())

                {{-- <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                    <i class="fa fa-times icon"></i>
                </button>
                不知道啥用 --}}
               
                <li><a href="{{ route('users.index') }}">用户列表</a></li>
                {{-- 用户列表按钮 --}}

                {{-- 第一个下拉菜单开始 --}}
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-comments-o"></i></a>
                    <ul class="dropdown-menu animated fadeInDown">
                        <li class="title">
                            Notification <span class="badge pull-right">0</span>
                        </li>
                        <li class="message">
                            No new notification
                        </li>
                    </ul>
                </li>

                {{-- 第二个下拉菜单开始 --}}
                <li class="dropdown danger">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-star-half-o"></i> 4</a>
                    <ul class="dropdown-menu danger  animated fadeInDown">
                        <li class="title">
                            Notification <span class="badge pull-right">4</span>
                        </li>
                        <li>
                            <ul class="list-group notifications">
                                <a href="#">
                                    <li class="list-group-item">
                                        <span class="badge">1</span> <i class="fa fa-exclamation-circle icon"></i> new registration
                                    </li>
                                </a>
                                <a href="#">
                                    <li class="list-group-item">
                                        <span class="badge success">1</span> <i class="fa fa-check icon"></i> new orders
                                    </li>
                                </a>
                                <a href="#">
                                    <li class="list-group-item">
                                        <span class="badge danger">2</span> <i class="fa fa-comments icon"></i> customers messages
                                    </li>
                                </a>
                                <a href="#">
                                    <li class="list-group-item message">
                                        view all
                                    </li>
                                </a>
                            </ul>
                        </li>
                    </ul>
                </li>
                
                {{-- 第三个下拉菜单开始 --}}
                <li class="dropdown profile">
                    {{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin <span class="caret"></span></a> --}}
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            {{ Auth::user()->name }} <b class="caret"></b>
                            </a>
                    <ul class="dropdown-menu animated fadeInDown">
                        <li class="profile-img">
                            <img src="../img/profile/picjumbo.com_HNCK4153_resize.jpg" class="profile-img">
                        </li>
                        <li>
                            <div class="profile-info">
                                <h4 class="username">{{ Auth::user()->name }}</h4>
                                <p>{{ Auth::user()->emall }}</p>
                                <div class="btn-group margin-bottom-2x" role="group">
                                    <button type="button" class="btn btn-default"><i class="fa fa-user"></i><a href="{{ route('users.show', Auth::user()->id) }}">个人中心</a></button> 
                                    {{--<button type="button" class="btn btn-default"><i class="fa fa-user"></i> Profile</button>  --}}
                                    <button type="button" class="btn btn-default"><i class="fa fa-sign-out"></i><a href="{{ route('users.edit', Auth::user()->id) }}">编辑资料</a></button>
                                    <a id="logout" href="#">
                                        <form action="{{ route('logout') }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            {{-- HTML代码为<input type="hidden" name="_method" value="DELETE">   --}}
                                            <button class="btn btn-block btn-danger" type="submit" name="button"><i class="fa fa-sign-out"></i>退出</button>
                                        </form>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                {{-- 第三个下拉菜单结束 --}}
            @else
                <li><a href="{{ route('help') }}">帮助</a></li>
                <li><a href="{{ route('login') }}">登录</a></li>
            @endif
        </ul>
    </div>
</nav>
{{--以上是上方导航栏  --}}