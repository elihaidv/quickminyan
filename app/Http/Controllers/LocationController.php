<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Grimzy\LaravelMysqlSpatial\Types\Point;


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
        return Location::query()->selectRaw("*,(
            GLength(
              LineStringFromWKB(
                LineString(
                  location,
                  GeomFromText('POINT(".$request->lat ." ". $request->lng.")')
                )
              )
            )
          )
          AS distance")->get();
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
            // $user = User::create([
            //     'name' => $request->name,
            //     'phone' => $request->phone,
            //     'api_token' => Str::random(60)
            // ]);
            // $location->user_id = $user->id;
        }
        $location->fill($request->all());
        $location->user_id = $request->user;
        $location->location = new Point($request->lat, $request->lng);
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
<<<<<<< HEAD

=======
>>>>>>> f830f3b3f40a5d2f38b86c897071ac2b05db5130
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
