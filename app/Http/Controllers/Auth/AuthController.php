<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/verify';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if(empty($data['id'])){$data['id']=0;}
        return Validator::make($data, [
            'username' => 'required|max:32|min:4|unique:users,username,'.$data['id'],            
            'password' => 'required|min:6|confirmed',
            'email' => 'required|email|max:255|unique:users,email,'.$data['id'],
            'firstname'=>'required|max:32',
            'lastname'=>'required|max:32',
            'address'=>'required|max:255|min:10',
            'phone'=>'required|max:12|min:12',
        ],[
            'required'=>'ข้อมูลที่จำเป็น',
            'max'=>'ข้อมูลยาวเกินไป',
            'min'=>'ข้อมูลสั้นเกินไป',
            'unique'=>'มีผู้ใช้แล้ว',
            'confirmed'=>'รหัสยืนยันไม่ตรงกัน',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {        
        return User::create([
            'username' => $data['username'],            
            'password' => bcrypt($data['password']),
            'email' => $data['email'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'type' => $data['type'],
        ]);
    }
}
