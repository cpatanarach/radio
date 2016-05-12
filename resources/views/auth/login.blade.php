@extends('layouts.app')

@section('content')
    <div class="container col-sm-9">
        <div class="panel panel-success active">
            <div class="panel-heading"><strong>เข้าสู่ระบบ</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label class="col-sm-4 control-label">Username</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="login" value="{{ old('login') }}" placeholder="Username or E-mail Address">

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-sm-4 control-label">Password</label>

                            <div class="col-sm-6">
                                <input type="password" class="form-control" name="password" placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6 col-sm-push-4 text-left">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> ให้ฉันอยู่ในระบบตลอดไป
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6 col-sm-push-4 text-left">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>เข้าสู่ระบบ
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">ลืมรหัสผ่าน?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection
