<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalinsureController extends Controller
{
    public function index()
    {
        return view('calinsure.index');
    }
}
