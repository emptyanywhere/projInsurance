<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function search(){
        return view('page.search');
    }
    
    public function result(){
        return view('page.result');
    }

    public function nlist(){
        return view('page.nlist');
    }
}
