@extends('layouts.app')

@section('content')     

<div class="col-sm-9 ">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-8">
            <div class="panel panel-default text-left ">
                <div class="panel-body">
            <h4>รับฟังวิทยุ</h4>
        <IFRAME name="flash" src="https://www.userpanel.net/radio/player.php?bgcolor=&fontcolor=&player=7&dj=yes&listener=yes&bitrate=yes&song=yes&ipaddress=6&port=7072&port80=&encoding=utf8" width=100% height=130 frameborder=0 scrolling=no></IFRAME>
        </div>
        </div>
              <div class="panel panel-default text-left ">
                <div class="panel-body"><!-- InstanceBeginEditable name="content" -->
                <div class="container">
	<div class="row">
		<h3>ดาวน์โหลดสปอตและทะเบียนยาด่านล่างค่ะ</h3>
        <p> <a class="btn btn-primary  glyphicon glyphicon-file" href="{{url('../resources/assets/file/file.rar')}}">สปอตโฆษณา</a>  </p>
       <p> <a class="btn btn-primary  glyphicon glyphicon-file" href="{{url('../resources/assets/file/01.rar')}}">ใบอนุญาตให้โฆษณายาทางสื่อทั่วไป</a>  </p>
       
        
       <p>ติดต่อสอบถาม โทร 088-3528047,087-1325748</p>
        <p>ID:Line cc0883528048</p>
        <p>Email: pcb.idol@windowslive.com</p>
	</div>
</div><!-- InstanceEndEditable --> 
                
                
                
                </div>
              </div>
            </div>
            <div class="col-sm-4">
            <table class="table table-striped">
            <tbody>
            <!--<thead>
  <a href="#" class="list-group-item  tab-color">
    ผู้ใช้ที่ออนไลน์
  </a> </thead>-->
  			<tr><td>
            <div class="list-group">
            
  <a href="#" class="list-group-item glyphicon glyphicon-user  text-left"> moo</a>
  <a href="#" class="list-group-item glyphicon glyphicon-user text-left"> A</a>
  <a href="#" class="list-group-item glyphicon glyphicon-user text-left"> B</a>
  <a href="#" class="list-group-item glyphicon glyphicon-user text-left"> C</a>
  <a href="#" class="list-group-item glyphicon glyphicon-user text-left"> moo</a>
  <a href="#" class="list-group-item glyphicon glyphicon-user text-left"> A</a>
  <a href="#" class="list-group-item glyphicon glyphicon-user text-left"> B</a>
  <a href="#" class="list-group-item glyphicon glyphicon-user text-left"> C</a>
  <a href="#" class="list-group-item  glyphicon glyphicon-user text-left"> moo</a>
  <a href="#" class="list-group-item  glyphicon glyphicon-user text-left"> A</a>
  <a href="#" class="list-group-item glyphicon glyphicon-user text-left"> B</a>
  <a href="#" class="list-group-item glyphicon glyphicon-user text-left"> C</a>
</div> </td></tr>
                </table>
             
             <!-- <div class="well">
                <p>ADS</p>
              </div>
              <div class="well">
                <p>ADS</p>
              </div>-->
            </div>
          </div>
        </div>
      </div>
      <!--<div class="row">
        <div class="col-sm-3">
          <div class="well">
            <p>ข่าว</p>
            
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well"> </div>
        </div>
      </div>-->
    </div>


@endsection  
<!-- Script -->
@section('script')
@endsection 