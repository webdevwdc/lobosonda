<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
	public $table = 'roles';
	public $fillable = ['name','display_name','description'];
}