<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boat extends Model
{
    protected $table = 'boats';
	public $fillable = ['name','seats','crew','description'];
	
	public function trip(){
	    return $this->hasMany('App\Models\Trip','boat_id');
	}
}
