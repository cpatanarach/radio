<h4>สวัสดี {{$firstname}}</h4>
<h5>เราคือทีมงาน SumritRadio คุณได้ทำการเปลี่ยนอีเมลในการติดต่อ</h5>
<h5>คุณต้องการดำเนินการต่อไปหรือไม่?</h5>
<form method="POST" action="{{url('save_email')}}">{!! csrf_field() !!}
	<input type="hidden" name="email" value="{{$email}}"></input>
	<input type="hidden" name="id" value="{{$id}}"></input>
	<button type="submit">  ยืนยันและดำเนินการต่อไป  </button>
</form>