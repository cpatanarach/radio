<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use Validator;

class HomeController extends Controller
{
    
    public function safeVerify($data){
        return Validator::make($data, [
            'verify'=>'required',
        ],[
            'required'=>'กรุณากรอกข้อมูล',
        ]);
    }
    protected function verify(){
        if(Auth::check()){
        	$type = Auth::user()->type;
        	if($type == 'admin' || $type == 'users' || $type == 'author'){
        		return redirect('/');
        	}else{        		
                return view('verify');
        	}            
        }else{
            return redirect('/');
        }
    }
    protected function verifyCode(Request $request){
        $validator = $this->safeVerify($request->all());

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $code = Auth::user()->type;
            if($request->verify == $code){
                $user = Auth::user();
                $user->type = 'users';
                $user->save();
                return redirect('/');
            }else{
                return redirect()->back()->withErrors(['verify'=>'ตรวจสอบการกรอกข้อมูลอีกครั้ง'])->withInput();
            }
        }
    }
    public function index(){
        return view('home')->with('home',1);
    }
}