@extends('layouts.app')
@section('content')
<div class="container col-md-9">
        <div class="panel panel-success active">
            <div class="panel-heading"><strong>ลงทะเบียน</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Username</label>

                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="ชื่อในการเข้าระบบ">

                                @if ($errors->has('username'))
                                    <span class="help-block text-left">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Password</label>

                            <div class="col-sm-7">
                                <input type="password" class="form-control" name="password" placeholder="กรอกรหัสผ่าน">

                                @if ($errors->has('password'))
                                    <span class="help-block text-left">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Confirm Password</label>

                            <div class="col-sm-7">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="ยืนยันรหัสผ่าน">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block text-left">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">E-Mail Address</label>

                            <div class="col-sm-7">
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

                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">ชื่อ</label>

                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" placeholder="ชื่อ">

                                @if ($errors->has('firstname'))
                                    <span class="help-block text-left">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">สกุล</label>

                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" placeholder="สกุล">

                                @if ($errors->has('lastname'))
                                    <span class="help-block text-left">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">ที่อยู่</label>

                            <div class="col-sm-7">
                                <textarea class="form-control" name="address" rows="5" placeholder="ที่อยู่ปัจจุบัน(10-255 ตัวอักษร)">{{old('address')}}</textarea>

                                @if ($errors->has('address'))
                                    <span class="help-block text-left">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">โทรศัพท์</label>

                            <div class="col-sm-4">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                <input type="text" class="form-control bfh-phone" name="phone" value="{{ old('phone') }}" data-format="dd-dddd-dddd" placeholder="หมายเลขโทรศัพท์">
                            </div>
                                @if ($errors->has('phone'))
                                    <span class="help-block text-left">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-push-3 btn-group">
                                <button type="submit" class="btn btn-primary active"><span class="glyphicon glyphicon-user"></span></button>
                                <button type="submit" class="btn btn-primary">
                                ลงทะเบียน
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
</div>
@endsection