<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Contact; /*เพิ่มทัหลังเพื่ออ้างอิง ถ้าไม่เพิ่มคำสั่ง request หาไฟล์ contact ไม่เจอ*/ 
use App\User;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Contact::all(); //queryดึงข้อมูลมาจาก Model Contact , เก็บไว้ที่ $data 
        $data = User::all();
        return view('contact.index', compact(['data'])); //  , ส่งข้อมูลไปที่ view index
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email', /* ต้องกรอก email และต้องเป็นรูปแบบ xxxx@email.com ถึงจะบันทึกข้อมูล*/
            'phone'=>'required'
        ]);

        Contact::create($request->all());
        //return redirect()->back(); /*เปลี่ยนหน้าแสดงผลกลับไปหน้าแรก */
        return redirect('/contact'); // เมื่อบันทึกผู้ติดต่อแล้วให้เปลี่ยนหน้าเว็บไปหน้าแรกของ contact
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
        $data=Contact::find($id); //คิวรี่ข้อมูลจาก model contact 

        return view('contact.edit', compact(['data'])); 
        //ส่งข้อมูล edit ที่ contact ไปหน้า view โดยดึงข้อมูลที่อยู่ในอาเรย์มาด้วยเพื่อนแสวงข้อมูลก่อนแก้ไข
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
        $request->validate([
            'name'=>'required',
            'email'=>'required|email', 
            'phone'=>'required'
        ]);

        Contact::find($id)->update($request->all());
    
        return redirect('/contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Contact::find($id)->delete();
        User::find($id)->delete();
        return redirect('/contact');
    }
}
