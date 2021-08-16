<?php

namespace App\Http\Controllers\Admin;

use App\daily_target;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DailyTargetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.dailyTarget.index');
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
     * @param  \App\daily_target  $daily_target
     * @return \Illuminate\Http\Response
     */
    public function show(daily_target $daily_target)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\daily_target  $daily_target
     * @return \Illuminate\Http\Response
     */
    public function edit(daily_target $daily_target)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\daily_target  $daily_target
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, daily_target $daily_target)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\daily_target  $daily_target
     * @return \Illuminate\Http\Response
     */
    public function destroy(daily_target $daily_target)
    {
        //
    }
}
