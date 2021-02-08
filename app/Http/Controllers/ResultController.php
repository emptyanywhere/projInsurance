<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Fdplan;
use App\Search;
use App\Result;
use DB;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ages = DB::table('fdplans')->select('age')->distinct()->get()->pluck('age')->sort();
        $net_incomes = DB::table('fdplans')->select('net_income')->distinct()->get()->pluck('net_income')->sort();

        $dividents = DB::table('fdplans')->select('divident')->distinct()->get()->pluck('divident')->sort();
        $health_cks = DB::table('fdplans')->select('health_ck')->distinct()->get()->pluck('health_ck')->sort();

        $saving_goals = DB::table('fdplans')->select('saving_goal')->distinct()->get()->pluck('saving_goal')->sort();
        $pay_ip_types = DB::table('fdplans')->select('pay_ip_type')->distinct()->get()->pluck('pay_ip_type')->sort();

        $add_contracts = DB::table('fdplans')->select('add_contract')->distinct()->get()->pluck('add_contract')->sort();

        $zero = 0;
        $seventy = array('70', '71', '72', '73', '74');
        //$seventyfive = array('75', '76', '77', '78', '79'); 
        $seventyfive = 75;
        $eighty = 80; 
        
        //$fdplans = Fdplan::query();
        //$fdplan = Fdplan::all(); //ข้อมูลมาหมด
        $fdplan = Fdplan::query();

        /*if($request->filled('age') && $request->filled('age') <= $seventyfive){
            $fdplan->where('age', '<=', $request->age);
        }*/
        /*if($request->filled('age'))
        {
            if($request->filled('age') <= $seventyfive)
            {
                $fdplan->where('age', '<=', $request->age);
            }
            elseif($request->filled('age') <= $eighty)
            {
                $fdplan->where('age', '<=', $request->age);
            }
            else{
                //
            }

        }*/
        if($request->filled('age'))
        {   
            if($request->filled('age') >= $zero)
            {
                $fdplan->where('age', '>=', $request->age);
            }
            elseif($request->filled('age') >= $seventyfive)
            {
                $fdplan->where('age', '>=', $request->age);
            }
            elseif($request->filled('age') >= $eighty)
            {
                $fdplan->where('age', '>=', $request->age);
            }
            else{
                //
            }
        }

        /*$ten = 10;
        $hundred= 100; 
        $net_ten_percent = ($net_incomes*$ten)/$hundred;*/

        foreach($net_incomes as $key=>$value)
        {
            $net_ten_percent = ($value*10)/100;
        }

        if($request->filled('net_income'))
        {
            $fdplan->where('min_amount', '<=', $net_ten_percent);
        }

        
        if($request->filled('divident')){
            $fdplan->where('divident', $request->divident);
        }
        if($request->filled('health_ck')){
            $fdplan->where('health_ck', $request->health_ck);
        }

        if($request->filled('saving_goal')){
            $fdplan->where('saving_goal', $request->saving_goal);
        }
        if($request->filled('pay_ip_type')){
            $fdplan->where('pay_ip_type', $request->pay_ip_type);
        }

        if($request->filled('add_contract')){
            $fdplan->where('add_contract', $request->add_contract);
        }

        return view('page.result', [
            'age' => $ages,
            'net_income' => $net_incomes,
            'health_ck' => $health_cks,
            'divident' => $dividents,
            'saving_goals' => $saving_goals,
            'pay_ip_types' => $pay_ip_types,
            'add_contract' => $add_contracts,

            'fdplans' => $fdplan->get(),
        ]);
        
        //dd($request);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
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
