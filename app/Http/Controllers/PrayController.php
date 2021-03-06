<?php

namespace App\Http\Controllers;

use App\Location;
use App\Pray;
use Illuminate\Http\Request;

class PrayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $pray = Pray::create($request->all());
        $pray->location->increment('prayers');
        return $pray;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pray  $pray
     * @return \Illuminate\Http\Response
     */
    public function show(Pray $pray)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pray  $pray
     * @return \Illuminate\Http\Response
     */
    public function edit(Pray $pray)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pray  $pray
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pray $pray)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pray  $pray
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pray $pray)
    {
        return $pray->delete();
    }
}
