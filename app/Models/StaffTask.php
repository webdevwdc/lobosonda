<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StaffTask extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'task_name','status'
    ];

    protected $table = 'staff_tasks';
}
