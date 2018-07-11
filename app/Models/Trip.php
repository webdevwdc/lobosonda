<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $table = 'trips';
    
	public $fillable = ['title','date', 'from_time', 'to_time', 'boat_id', 'user_id', 'meeting_point', 'description', 'status'];
	
	public function booking(){
	    return $this->hasMany('App\Models\Booking','trip_id');
	}
	
	public function boat(){
	    return $this->belongsTo('App\Models\Boat','boat_id');
	}
	
	public function tripAssignUser($attributeID){
	    $thisData = $this->hasMany('App\Models\TripAssign','trip_id', 'id')->where('attribute_id', $attributeID)->first();

	    return $thisData->user_id;
	}
}
