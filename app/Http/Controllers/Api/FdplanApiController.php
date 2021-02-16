<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Fdplan;
use App\Http\Resources\FdplanResource;
use App\Http\Resources\FdplanCollection;

class FdplanApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //$fdplans = Fdplan::all();
        $fdplan = Fdplan::paginate(10);
        // unset($fdplan['note']); // now not work

        // return response()->json($fdplans);
        // return new FdplanResource($fdplans); //not work becuase called in show function.//must use collection instance
        // return FdplanResource::Collection($fdplans); // FdplanResource::{medthod}({agrument}) //worked but not recommend
        return new FdplanCollection($fdplan);
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
    public function show(Fdplan $fdplan)
    {
        // return response()->json($fdplan);
        return new FdplanResource($fdplan);
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
