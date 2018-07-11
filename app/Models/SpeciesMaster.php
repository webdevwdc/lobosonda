<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpeciesMaster extends Model
{
    protected $table = 'species_masters';
    
	public $fillable = ['scientific_name','common_name','status'];
	
}
