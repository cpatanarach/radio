@extends('layouts.app')

@section('content')       
       
            <div class="col-sm-6">

                      <center>
                          <IFRAME name="flash" src="https://www.userpanel.net/radio/player.php?bgcolor=&fontcolor=&player=7&dj=&listener=&bitrate=&song=yes&ipaddress=6&port=7072&port80=&encoding=utf8" width=350 height=150 frameborder=0 scrolling=no></IFRAME>
                      </center>

                  <div class="container col-sm-12">
                    <div class="panel panel-success active">
                    <div class="panel-heading"><span class="glyphicon glyphicon-list-alt fa-btn"></span><strong>แจ้งใบเสร็จ</strong></div>
                      <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/send_receipt') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('no') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">ใบเสร็จเลขที่</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="no" placeholder="หมายเลขใบเสร็จ" value="{{ old('no') }}">

                                @if ($errors->has('no'))
                                    <span class="help-block text-left">
                                        <strong>{{ $errors->first('no') }}</strong>
                                    </span>
                                @endif
                            </div>                 
                        </div>

                        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">วันที่</label>
                            <div class="col-md-5">
                                <input type="date" class="form-control" name="date" placeholder="[ วันที่ออกใบเสร็จ ]" value="{{ old('date') }}">
                                @if ($errors->has('date'))
                                    <span class="help-block text-left">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>                 
                        </div>

                        <div class="form-group{{ $errors->has('customer') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">ลูกค้า</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="customer" placeholder="นามลูกค้า" value="{{ old('customer') }}">

                                @if ($errors->has('customer'))
                                    <span class="help-block text-left">
                                        <strong>{{ $errors->first('customer') }}</strong>
                                    </span>
                                @endif
                            </div>                 
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">ที่อยู่</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="address" rows="5" placeholder="ที่อยู่ในใบเสร็จ">{{old('address')}}</textarea>

                                @if ($errors->has('address'))
                                    <span class="help-block text-left">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>                 
                        </div>

                        <div class="form-group{{ $errors->has('province') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">จังหวัด</label>
                            <div class="col-md-8">
                                <select class="form-control" name="province">
                                    <option value="" selected>--------- เลือกจังหวัด ---------</option>
                                    <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                    <option value="กระบี่">กระบี่ </option>
                                    <option value="กาญจนบุรี">กาญจนบุรี </option>
                                    <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                    <option value="กำแพงเพชร">กำแพงเพชร </option>
                                    <option value="ขอนแก่น">ขอนแก่น</option>
                                    <option value="จันทบุรี">จันทบุรี</option>
                                    <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                    <option value="ชัยนาท">ชัยนาท </option>
                                    <option value="ชัยภูมิ">ชัยภูมิ </option>
                                    <option value="ชุมพร">ชุมพร </option>
                                    <option value="ชลบุรี">ชลบุรี </option>
                                    <option value="เชียงใหม่">เชียงใหม่ </option>
                                    <option value="เชียงราย">เชียงราย </option>
                                    <option value="ตรัง">ตรัง </option>
                                    <option value="ตราด">ตราด </option>
                                    <option value="ตาก">ตาก </option>
                                    <option value="นครนายก">นครนายก </option>
                                    <option value="นครปฐม">นครปฐม </option>
                                    <option value="นครพนม">นครพนม </option>
                                    <option value="นครราชสีมา">นครราชสีมา </option>
                                    <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                    <option value="นครสวรรค์">นครสวรรค์ </option>
                                    <option value="นราธิวาส">นราธิวาส </option>
                                    <option value="น่าน">น่าน </option>
                                    <option value="นนทบุรี">นนทบุรี </option>
                                    <option value="บึงกาฬ">บึงกาฬ</option>
                                    <option value="บุรีรัมย์">บุรีรัมย์</option>
                                    <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                    <option value="ปทุมธานี">ปทุมธานี </option>
                                    <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                    <option value="ปัตตานี">ปัตตานี </option>
                                    <option value="พะเยา">พะเยา </option>
                                    <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                    <option value="พังงา">พังงา </option>
                                    <option value="พิจิตร">พิจิตร </option>
                                    <option value="พิษณุโลก">พิษณุโลก </option>
                                    <option value="เพชรบุรี">เพชรบุรี </option>
                                    <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                    <option value="แพร่">แพร่ </option>
                                    <option value="พัทลุง">พัทลุง </option>
                                    <option value="ภูเก็ต">ภูเก็ต </option>
                                    <option value="มหาสารคาม">มหาสารคาม </option>
                                    <option value="มุกดาหาร">มุกดาหาร </option>
                                    <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                    <option value="ยโสธร">ยโสธร </option>
                                    <option value="ยะลา">ยะลา </option>
                                    <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                    <option value="ระนอง">ระนอง </option>
                                    <option value="ระยอง">ระยอง </option>
                                    <option value="ราชบุรี">ราชบุรี</option>
                                    <option value="ลพบุรี">ลพบุรี </option>
                                    <option value="ลำปาง">ลำปาง </option>
                                    <option value="ลำพูน">ลำพูน </option>
                                    <option value="เลย">เลย </option>
                                    <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                    <option value="สกลนคร">สกลนคร</option>
                                    <option value="สงขลา">สงขลา </option>
                                    <option value="สมุทรสาคร">สมุทรสาคร </option>
                                    <option value="สมุทรปราการ">สมุทรปราการ </option>
                                    <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                    <option value="สระแก้ว">สระแก้ว </option>
                                    <option value="สระบุรี">สระบุรี </option>
                                    <option value="สิงห์บุรี">สิงห์บุรี </option>
                                    <option value="สุโขทัย">สุโขทัย </option>
                                    <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                    <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                    <option value="สุรินทร์">สุรินทร์ </option>
                                    <option value="สตูล">สตูล </option>
                                    <option value="หนองคาย">หนองคาย </option>
                                    <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                    <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                    <option value="อุดรธานี">อุดรธานี </option>
                                    <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                    <option value="อุทัยธานี">อุทัยธานี </option>
                                    <option value="อุบลราชธานี">อุบลราชธานี</option>
                                    <option value="อ่างทอง">อ่างทอง </option>
                                </select>

                                @if ($errors->has('province'))
                                    <span class="help-block text-left">
                                        <strong>{{ $errors->first('province') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('total') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">รวม</label>
                            <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                                <input type="number" class="form-control" name="total" placeholder="ราคารวม" value="{{ old('total') }}">
                            </div>

                                @if ($errors->has('total'))
                                    <span class="help-block text-left">
                                        <strong>{{ $errors->first('total') }}</strong>
                                    </span>
                                @endif
                            </div>                 
                        </div>

                        <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                        
                            <div class="col-md-8 col-sm-push-3">
                                <input type="file" class="form-control" name="file" placeholder="นามลูกค้า" value="{{ old('file') }}">

                                @if ($errors->has('file'))
                                    <span class="help-block text-left">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                            </div>                 
                        </div>

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-push-3 btn-group">
                                <button type="submit" class="btn btn-primary active"><span class="glyphicon glyphicon-send"></span></button>
                                <button type="submit" class="btn btn-primary">
                                ส่งใบเสร็จ
                                </button>
                            </div>
                        </div>

                        </form>                        
                      </div>
                    </div>
                  </div>
                  <!--Receipt has been send-->
                      <div class="container col-sm-12">
                        
                          <table class="table table-striped">
                              <tr>
                                <td><strong>วันที่</strong></td><td><strong>เลขที่ใบเสร็จ</strong></td><td><strong>สถานะ</strong></td>
                              </tr>
                            @forelse($user as $user_receipt)
                              <tr>
                                <td>{{$user_receipt->date}}</td><td>{{$user_receipt->no}}</td>
                                @if($user_receipt->read)
                                  <td><span class="glyphicon glyphicon-eye-open"></span></td>
                                @else
                                  <td><span class="glyphicon glyphicon-eye-close"></span></td>
                                @endif
                              </tr>                    
                            @empty
                              <tr>
                                <td colspan="3" class="text-warning">ไม่พบใบเสร็จที่คุณแจ้งไว้</td>
                              </tr>
                            @endforelse
                            </table>
                          
                      </div>
            </div>
            <div class="col-sm-3 well">
              <div class="thumbnail">
                <p><i class="glyphicon glyphicon-user"></i> ผู้ใช้ที่ออนไลน์:</p>
                <img src="paris.jpg" alt="Paris" width="1" height="2">
                <p><strong>Paris</strong></p>
                <p>Fri. 27 November 2015</p>
                <button class="btn btn-primary">Info</button>
              </div>
              <div class="well">
                <p>ADS</p>
              </div>
              <div class="well">
                <p>ADS</p>
              </div>
            </div>
@endsection  
<!-- Script -->
@section('script')

@endsection 