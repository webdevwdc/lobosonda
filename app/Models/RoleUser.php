<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    protected $table ="role_user";
    public $primaryKey  = 'user_id';
    public $timestamps = false;
    public $fillable = ['user_id','role_id'];

    public function role(){
    	return $this->hasOne('App\Models\Role','id','role_id');
    }

}
