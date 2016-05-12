@extends('layouts.app')
@section('content')
        <div class="container col-md-9">
        <div class="panel panel-success active">
            <div class="panel-heading"><strong>เปลี่ยนรหัสผ่าน</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/change_password') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('password_current') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Current Password</label>

                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="password_current" value="{{ old('password_current') }}" placeholder="รหัสผ่านปัจจุบัน">

                                @if ($errors->has('password_current'))
                                    <span class="help-block text-left">
                                        <strong>{{ $errors->first('password_current') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">New Password</label>

                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="รหัสผ่านใหม่">

                                @if ($errors->has('password'))
                                    <span class="help-block text-left">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Confirm Password</label>

                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="ยืนยันรหัสผ่าน">
                            </div>
                        </div>
                        @if(Session::has('success'))
                            <div class="form-group"><div class="col-sm-8 col-sm-push-3">
                                <div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok"></span>&nbsp&nbsp{{ Session::get('success') }}
                                </div>
                            </div></div>
                        @endif
                        <div class="form-group">
                            <div class="col-sm-5 col-sm-push-3 btn-group">
                                <button type="submit" class="btn btn-primary active"><span class="glyphicon glyphicon-floppy-disk"></span></button>
                                <button type="submit" class="btn btn-primary">
                                    &nbsp&nbspบันทึก&nbsp&nbsp
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container col-md-9">
        <div class="panel panel-success active">
            <div class="panel-heading"><strong>เปลี่ยนอีเมล</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/change_email') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">อีเมล</label>

                            <div class="col-sm-8">
                                 <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address">                          
                            </div>
                                @if ($errors->has('email'))
                                    <span class="help-block text-left">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @if(Session::has('mail_success'))
                            <div class="form-group"><div class="col-sm-8 col-sm-push-3">
                                <div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok"></span>&nbsp&nbsp{{ Session::get('mail_success') }}
                                </div>
                            </div></div>
                        @endif
                         <div class="form-group">
                            <div class="col-sm-5 col-sm-push-3 btn-group">
                                <button type="submit" class="btn btn-primary active"><span class="glyphicon glyphicon-transfer"></span></button>
                                <button type="submit" class="btn btn-primary">
                                    &nbsp&nbspเปลี่ยนอีเมล&nbsp&nbsp
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection