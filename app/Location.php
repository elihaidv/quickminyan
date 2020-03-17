<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;

class Location extends Model
{
    use SpatialTrait;

    protected $spatialFields = [
        'location'
    ];

    protected $fillable = [
        'name',
        'city',
        'repeatly',
        'hour'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
