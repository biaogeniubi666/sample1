@extends('layout.default2')
@section('title', '更新密码')

@section('content')
<div class="col-sm-12">
        <div class="login-body">
            <div class="progress hidden" id="login-progress">
                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    Change...
                </div>
            </div> 
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.update') }}">
                {{ csrf_field() }}
                <input type="hidden" name="token" value="{{ $token }}">
                {{-- 我们在用户进行表单提交时，会将密码重置的令牌信息通过隐藏输入框一同提交给密码控制器的 getReset 进行处理 --}}
                
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" >邮箱地址：</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
                    
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">密码：</label>

                    <div>
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="email">确认密码：</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                </div>

                {{-- <div class="form-group">
                    <div class="col-md-6 col-md-offset-4"> --}}
                <button type="submit" class="btn btn-primary">
                    修改密码
                </button>
                    {{-- </div>
                </div> --}}
            </form>
        </div>
</div>
        
@endsection