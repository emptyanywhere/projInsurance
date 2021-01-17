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

        return view('page.search', [
            'saving_goals' => $saving_goals,
            'pay_ip_types' => $pay_ip_types,
            'fdplans' => $fdplan->get(),
        ]);
        
        //dd($request);
    }

    public function store(Request $request)
    {
        return $request->all();
        return view('page.search');
    }
}
