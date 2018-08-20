<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        <a href="/" id="logo">Sample IOT</a>
        <nav>
          <ul class="nav navbar-nav navbar-right">
              {{--Laravel 路由：   <a href="/help">   改为   <a href="{{ route('help') }}">      --}}
            <li><a href="{{ route('help') }}">帮助</a></li>
            <li><a href="#">登录</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>