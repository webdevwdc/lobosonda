<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TripAssign extends Model
{
    //

    public $fillable = ['trip_id', 'attribute_id', 'user_id'];
}
