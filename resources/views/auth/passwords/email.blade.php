@extends('layout.default2')
@section('title', '重置密码')

@section('content')
{{-- <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">重置密码</div>
        <div class="panel-body"> --}}
<div class="col-sm-12">
    <div class="login-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="progress hidden" id="login-progress">
            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                Change...
            </div>
        </div> 

        <form method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}

                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">邮箱地址：</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form-group">             
                        <button type="submit" class="btn btn-primary">
                            发送密码重置邮件
                        </button>         
                </div>
            </form>
    </div>  
</div>
@endsection