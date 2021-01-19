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
        $saving_goals = DB::table('fdplans')->select('saving_goal')->distinct()->get()->pluck('saving_goal')->sort();
        $pay_ip_types = DB::table('fdplans')->select('pay_ip_type')->distinct()->get()->pluck('pay_ip_type')->sort();

        //$fdplans = Fdplan::query();
        //$fdplan = Fdplan::all(); //ข้อมูลมาหมด
        $fdplan = Fdplan::query();

        if($request->filled('saving_goal')){
            $fdplan->where('saving_goal', $request->saving_goal);
        }
        if($request->filled('pay_ip_type')){
            $fdplan->where('pay_ip_type', $request->pay_ip_type);
        }

        return view('page.result', [
            'saving_goals' => $saving_goals,
            'pay_ip_types' => $pay_ip_types,
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
