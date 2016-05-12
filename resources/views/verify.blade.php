@extends('layouts.app')
@section('content')
        <div class="col-sm-8 col-sm-offset-1 panel well">
                    <form class="form-horizontal" role="form" method="GET" action="{{ url('/verifyCode') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('verify') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">รหัสยืนยัน</label>

                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="verify" value="{{ old('verify') }}" placeholder="กรอกรหัสที่ได้จากอีเมล">

                                @if ($errors->has('verify'))
                                    <span class="help-block text-left">
                                        <strong>{{ $errors->first('verify') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-sm-4 btn-group">
                                <button type="submit" class="btn btn-primary active"><span class="glyphicon glyphicon-send"></span></button>
                                <button type="submit" class="btn btn-primary">
                                    &nbsp&nbspยืนยัน&nbsp&nbsp
                                </button>
                            </div>
                        </div>
                    </form>
        </div>
@endsection