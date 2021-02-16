<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;

class PageController extends Controller
{
    public function search()
    {
        return view('page.search');
    }
    
    public function result()
    {
        return view('page.result');
    }

    public function nlist()
    {
        $data = news::all();
        return view('page.nlist', compact(['data']));
    }

    public function teaminfo()
    {
        return view('page.teaminfo');
    }
}
