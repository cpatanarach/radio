@extends('layouts.app')

<!-- Main Content -->
@section('content')

        <div class="container col-md-9">
        <div class="panel panel-success active">
            <div class="panel-heading"><strong>ลืมรหัสผ่าน</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/') }}">
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">อีเมล</label>

                            <div class="col-sm-6">
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
                            <div class="col-sm-3 btn-group">
                                <button type="submit" class="btn btn-primary active"><span class="glyphicon glyphicon-send"></span></button>
                                <button type="submit" class="btn btn-primary">
                                    &nbsp&nbspส่ง&nbsp&nbsp
                                </button>
                            </div>
                            <div class="col-sm-3">
                                @if(Session::has('success'))
                                    <div class="form-group"><div class="col-sm-8 col-sm-push-3">
                                        <div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok"></span>&nbsp&nbsp{{ Session::get('success') }}
                                        </div>
                                    </div></div>
                                @endif
                            </div>
                        </div>
                  </form>
                </div>
            </div>
        </div>

@endsection
