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
    protected function validator(array $data)
    {
        return Validator::make($data, [         
            'province'=>'required',
            'file'=>'required',
        ],[
            'required'=>'ข้อมูลที่จำเป็น',
            'file.required'=>'คุณยังไม่ได้เลือกไฟล์',
        ]);
    }
    public function index()
    {
        $user='';
        if(Auth::check()){
            $user = User::findOrFail(Auth::user()->id)->receipt;
        }        
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
            $user_id = 0;
            if(Auth::check()){
                $user_id = Auth::user()->id;
            }           
            Receipt::create([
                'province'=> $request->province,
                'file'=> 'draft',
                'path'=> 'draft',
                'user_id'=> $user_id,
            ]);$receipt = Receipt::all()->last();
            $Path = base_path('receipt');
            $extendsion = $request->file('file')->getClientOriginalExtension();
            $file = 'receipt'.$receipt->id.'_'.$receipt->created_at->format('Y-m-d').'.'.$extendsion;
            $request->file('file')->move($Path,$file);
            $receipt->file = $file;
            $receipt->path = $Path;
            $receipt->save();
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
