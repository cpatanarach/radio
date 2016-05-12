<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Validator;
use Auth;
use Hash;
use Mail;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    protected function ProfileValidator(array $data)
    {
        return Validator::make($data, [         
            'firstname'=>'required|max:32',
            'lastname'=>'required|max:32',
            'address'=>'required|max:255|min:10',
            'phone'=>'required|max:12|min:12',
        ],[
            'required'=>'ข้อมูลที่จำเป็น',
            'max'=>'ข้อมูลยาวเกินไป',
            'min'=>'ข้อมูลสั้นเกินไป',
        ]);
    }
    protected function PasswordValidator(array $data)
    {
        return Validator::make($data, [         
            'password' => 'required|min:6|confirmed',
        ],[
            'required'=>'ข้อมูลที่จำเป็น',
            'min'=>'ข้อมูลสั้นเกินไป',
            'confirmed'=>'รหัสยืนยันไม่ตรงกัน',
        ]);
    }
    protected function EmailValidator(array $data)
    {
        return Validator::make($data, [         
            'email' => 'required|email|max:255|unique:users,email,'.$data['id'],
        ],[
            'required'=>'ข้อมูลที่จำเป็น',
            'max'=>'ข้อมูลยาวเกินไป',
            'unique'=>'มีผู้ใช้แล้ว',
        ]);
    }
    public function index(){
        $auth = Auth::user();
        return view('profile.index')->with('user',$auth);
    }
    public function security(){
        return view('profile.security');
    }
    public function passwordUpdate(Request $request){   
        $errors = $this->PasswordValidator($request->all());
        $auth = User::findOrFail(Auth::user()->id);
        if(Hash::check($request->password_current, $auth->password)){
            if($errors->passes()){
                $auth->password = bcrypt($request->password);
                $auth->save();
                return redirect()->back()->with('success','บันทึกข้อมูลแล้ว');
            }else{
                return redirect()->back()->withErrors($errors)->withInput();
            }
        }else{
            $errors->errors()->add('password_current','ตรวจสอบการกรอกข้อมูลอีกครั้ง');
            return redirect()->back()->withErrors($errors)->withInput();
        }
    }
    public function emailUpdate(Request $request){
        $auth = Auth::user();
        $request->merge(['id'=>$auth->id]);
        $errors = $this->EmailValidator($request->all());
        if($errors->passes()){
            Mail::send('profile.change_mail', ['firstname'=>$auth->firstname, 'email'=>$request->email, 'id'=>$auth->id], function($message) use($request){
                $message->to($request->email, 'สมาชิก SumritRadio')->subject('ลิงค์สำหรับเปลี่นอีเมลล์');
            });
            return redirect()->back()->with('mail_success','ระบบได้ส่งลิงค์ยืนยันไปยัง '.$request->email.' แล้ว');
        }else{
                return redirect()->back()->withErrors($errors)->withInput();
        }
    }
    public function saveEmail(Request $request){
        $auth = User::findOrFail($request->id);
        $auth->email = $request->email;
        $auth->save();
        return redirect('/');
    }
    public function update(Request $request){
        $errors = $this->ProfileValidator($request->all());
        if($errors->passes()){
            $auth = User::findOrFail(Auth::user()->id);
            $auth->firstname = $request->firstname;
            $auth->lastname = $request->lastname;
            $auth->address = $request->address;
            $auth->phone = $request->phone;
            $auth->save();
            return redirect()->back()->with('success','บันทึกข้อมูลแล้ว');
        }else{
            return view('profile.index')->with('user',$request)->withErrors($errors);
        }
    }
}
