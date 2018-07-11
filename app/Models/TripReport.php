<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TripReport extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'trip_id','lattitude','longitude','min_depth','max_depth','visibility_in_miles','presence_os_calfs','species','behaviour','notes','winds','tides','moon_fase'
    ];

    protected $table = 'trip_reports';
}