<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Radio Online</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{url('../resources/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('../resources/assets/css/jasny-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('../resources/assets/css/temp2.css')}}">

    <style>

        .fa-btn {
            margin-right: 6px;
        }
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-inverse tab-color">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="http://www.sumritradio.com">www.sumritradio.com</a> 
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">    
            @if (Auth::guest())
            <form id="signin" class="navbar-form navbar-right" role="form" method="POST" action="{{url('/login')}}">{!! csrf_field() !!}<input type="hidden" name="remember" value="1">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="email" type="text" class="form-control" name="login" value="" placeholder="Username or E-mail">
                </div>
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                <div class="btn-group">
                    <a href="{{url('/register')}}" class="btn btn-primary">ลงทะเบียน</a>
                        <a href="{{url('/register')}}" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-question-sign"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/password/reset') }}"><span class="glyphicon glyphicon-info-sign"></span>&nbspลืมรหัสผ่าน</a></li>
                        </ul>
                    
                </div>
                <!--<a class="btn btn-success" href="#">Register</a></br>-->
                @if ($errors->has('username'))
                    <span class="help-block text-left">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
                    
            </form>
            @else
            <form id="signin" class="navbar-form navbar-right" role="form">       
                <div class="btn-group">
                    <a href="{{url('/profile/{id}')}}" class="btn btn-default">{{Auth::user()->firstname}}&nbsp&nbsp{{Auth::user()->lastname}}</a>
                        <a href="{{url('/profile/{id}')}}" class="dropdown-toggle btn btn-default" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-cog"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/profile/{id}') }}"><span class="glyphicon glyphicon-user"></span>&nbspข้อมูลส่วนตัว</a></li>
                                <li><a href="{{ url('/security/{id}') }}"><span class="glyphicon glyphicon-lock"></span>&nbspความปลอดภัย</a></li>
                                <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-log-out"></span>&nbspออกจากระบบ</a></li>
                        </ul>
                </div>                    
            </form>
            @endif
            </div>
        </div>
    </nav>

    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 well">
                <div class="row">
                    <div class="col-sm-2">
          
                    </div>
                    <div class="col-sm-10"> </div>

                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-sm-3 well well-menu-left"> 

                <ul class="nav nav-pills nav-stacked menu-left">
                    <li @if(!empty($home)) class="active" @endif><a class="text-left" href="{{ url('/') }}">Home</a></li>
                    <li @if(!empty($receipt)) class="active" @endif><a class="text-left" href="{{ url('/receipt') }}">แจ้งส่งใบเสร็จรับงิน</a></li>
                    <li><a class="text-left" href="#">แจ้งปัณหาการลิ้งสัญญาณ</a></li>
                    <li><a class="text-left" href="#">แจ้งข่าวประชาสัมพันธ์</a></li>
                    <li><a class="text-left" href="#">โหลดสปอต&ทะเบียนยา</a></li>
                    <li><a class="text-left" href="#">URL ลิ้งสัญญาณ</a></li>
                    <li><a class="text-left" href="#">สถานีวิทยุในเครือข่าย</a></li>
                    <li><a class="text-left" href="#">ผลิตภัณท์ตู้ฟักไข่</a></li>
                    <li><a class="text-left" href="#">แผนที่ตั้งสถานี</a></li>
                    <li><a class="text-left" href="#">ติดต่อเรา</a></li>
                </ul>
                <div class="well">
                    <h5>ลิ้งที่เกี่ยวข้อง</h5>
                    <p></p>
                    <p><span class="label label-success">Line ID: ผู้ใช้งานขณะนี้ </span></p>
                    <p><span class="label label-warning">Email: ผู้ใช้งานขณะนี้ </span></p>
                    <p> <span class="label label-default">Facebook</span> <span class="label label-primary">Twiter</span> </p>
                </div>
                <div class="alert alert-success fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p><strong>Ey!</strong></p>
                    People are looking at your profile. Find out who. 
                </div>
                <p><a href="#">Link</a></p>
                <p><a href="#">Link</a></p>
                <p><a href="#">Link</a></p>
            </div>
            @yield('content')
        </div>
    </div>
    <footer class="container-fluid text-center">
            <p>Footer Text</p>
    </footer>

    <!-- JavaScripts -->
    <script src="{{url('../resources/assets/js/jquery-1.10.1.min.js')}}"></script> 
    <script src="{{url('../resources/assets/js/bootstrap.min.js')}}"></script> 
    <script src="{{url('../resources/assets/js/jasny-bootstrap.min.js')}}"></script> 
    <!-- FormHelper -->
    <script src="{{url('../resources/assets/formhelper/bootstrap-formhelpers-phone.js')}}"></script> 
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    @yield('script')
</body>
</html>
