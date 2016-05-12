<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Receipt;
use App\User;
use Auth;
use Validator;

class ReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [         
            'no'=>'required|max:16|min:4|unique:receipts',
            'date'=>'required',
            'customer'=>'required|max:32',
            'address'=>'required|max:255|min:10',
            'province'=>'required',
            'total'=>'required|numeric|max:2000000',
            'file'=>'required',
        ],[
            'required'=>'ข้อมูลที่จำเป็น',
            'max'=>'ข้อมูลยาวเกินไป',
            'min'=>'ข้อมูลสั้นเกินไป',
            'total.max'=>'ยอดเงินสูงเกินไป',
            'file.required'=>'คุณยังไม่ได้เลือกไฟล์',
        ]);
    }
    public function index()
    {
        $user = User::findOrFail(Auth::user()->id)->receipt;
        return view('receipt.index')->with('receipt',1)->with('user',$user);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $errors = $this->validator($request->all());
        if ($errors->passes()) {
            $user_id = Auth::user()->id;
            Receipt::create([
                'no'=> $request->no,
                'date'=> $request->date,
                'customer'=> $request->customer,
                'address'=> $request->address,
                'province'=> $request->province,
                'total'=> $request->total,
                'user_id'=> $user_id,
                'read'=> 0,
            ]);
            return redirect()->back()->with('success','ระบบได้บันทึกข้อมูลแล้ว');
        }else{
            return redirect()->back()->withErrors($errors)->withInput();
        }        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
