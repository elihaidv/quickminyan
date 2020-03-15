<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use App\User;

class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->only(['update', 'destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Location::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $location = new Location();

        if (!$request->user){
            $user = User::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'api_token' => str_random(60)
            ]);
            $location->user_id = $user->id;
        }
        $location->user_id = $request->user;
        $location->fill($request->all());
        $location->save();
        return $location->load('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        $location->fill($request->all());
        return $location->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //
    }
}
