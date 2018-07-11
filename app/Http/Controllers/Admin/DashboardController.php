<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{   
	public $viewPath = 'admin.dashboard';

    public function index(){
    	return view($this->viewPath.'.index');
    }
}
