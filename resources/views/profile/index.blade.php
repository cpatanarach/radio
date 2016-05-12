@extends('layouts.app')
@section('content')          
      <div class="container col-md-9">
        <div class="panel panel-success active">
            <div class="panel-heading"><strong>ข้อมูลส่วนสัว</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/update_profile') }}">
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">ชื่อ</label>

                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="firstname" value="{{ $user->firstname }}" placeholder="ชื่อ">

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
                                <input type="text" class="form-control" name="lastname" value="{{ $user->lastname }}" placeholder="สกุล">

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
                                <textarea class="form-control" name="address" rows="5" placeholder="ที่อยู่ปัจจุบัน(10-255 ตัวอักษร)">{{$user->address}}</textarea>

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
                                <input type="text" class="form-control bfh-phone" name="phone" value="{{ $user->phone }}" data-format="dd-dddd-dddd" placeholder="หมายเลขโทรศัพท์">
                            </div>
                                @if ($errors->has('phone'))
                                    <span class="help-block text-left">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @if(Session::has('success'))
                            <div class="form-group"><div class="col-sm-7 col-sm-push-3">
                                <div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok"></span>&nbsp&nbsp{{ Session::get('success') }}
                                </div>
                            </div></div>
                        @endif
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-push-3 btn-group">
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
@endsection  
<!-- Script -->
@section('script')

@endsection 