<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Fdplan;
use App\Search;
use DB;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $ages = DB::table('fdplans')->select('age')->distinct()->get()->pluck('age')->sort();
        $net_incomes = DB::table('fdplans')->select('net_income')->distinct()->get()->pluck('net_income')->sort();

        $dividents = DB::table('fdplans')->select('divident')->distinct()->get()->pluck('divident')->sort();
        $health_cks = DB::table('fdplans')->select('health_ck')->distinct()->get()->pluck('health_ck')->sort();

        $saving_goals = DB::table('fdplans')->select('saving_goal')->distinct()->get()->pluck('saving_goal')->sort();
        $pay_ip_types = DB::table('fdplans')->select('pay_ip_type')->distinct()->get()->pluck('pay_ip_type')->sort();

        $add_contracts = DB::table('fdplans')->select('add_contract')->distinct()->get()->pluck('add_contract')->sort();

        //$eighty = 80; $seventy = 70; $seventyfive = 75;

        //$fdplans = Fdplan::query();
        //$fdplan = Fdplan::all(); //ข้อมูลมาหมด
        $fdplan = Fdplan::query();


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

        return view('page.search', [
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

    public function store(Request $request)
    {
        // This will return your screen
        return $request->all();
        return view('page.search');
    }
}
