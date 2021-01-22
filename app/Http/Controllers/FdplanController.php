<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fdplan;

class FdplanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth'])->only('index');
        $this->middleware(['auth'])->only('create');
        $this->middleware(['auth'])->only('edit');
    }

    public function index()
    {
        $data = Fdplan::all();
        return view('fdplan.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fdplan.create');
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
            'p_brand'=>'required',
            'p_name'=>'required',
            'p_descript'=>'required', //ต้องกำหนดความยาวตัวอักษรเพิ่ม
            'pay_ins_pre'=>'required',
            'protection'=>'required',
            'age'=>'required',
            'net_income'=>'required',
            'saving_goal'=>'required',
            'pay_ip_type'=>'required',
            'divident'=>'required',
            'health_ck'=>'required',
            'add_contract'=>'required',
            'details'=>'required',

            'insurer_age'=>'required',
            'annuity'=>'required',
            'bonus'=>'required',
            'min_amount'=>'required',
            'tax_break'=>'required',
            'pay_method'=>'required',
            //'policy_ben_pic'=>'required',
            'note'=>'required',
            'exclusion_cov'=>'required',
        ]);

        Fdplan::create($request->all());
        return redirect('/fdplan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fdplan = Fdplan::find($id);
        return view('fdplan.show', compact('fdplan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Fdplan::find($id);
        return view('fdplan.edit', compact(['data']));
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
            'p_brand'=>'required',
            'p_name'=>'required',
            'p_descript'=>'required',
            //'p_image'=>'required',
            'pay_ins_pre'=>'required',
            'protection'=>'required',
            'age'=>'required',
            'net_income'=>'required',
            'saving_goal'=>'required',
            'pay_ip_type'=>'required',
            'divident'=>'required',
            'health_ck'=>'required',
            'add_contract'=>'required',
            'details'=>'required',

            'insurer_age'=>'required',
            'annuity'=>'required',
            'bonus'=>'required',
            'min_amount'=>'required',
            'tax_break'=>'required',
            'pay_method'=>'required',
            //'policy_ben_pic'=>'required',
            'note'=>'required',
            'exclusion_cov'=>'required',
        ]);

        Fdplan::find($id)->update($request->all());
        return redirect('/fdplan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fdplan::find($id)->delete();
        return redirect('/fdplan');
    }
}
