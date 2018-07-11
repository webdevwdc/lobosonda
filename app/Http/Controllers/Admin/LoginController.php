<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth, \Redirect, \Session, \Cache;

class LoginController extends Controller
{
    public $viewPath = 'admin.login';

    public function index(){
    	return view($this->viewPath.'.adminLogin');
    }

    public function store(Request $request){
    	$this->validate($request,[
    		'email'=>'required|email',
    		'password'=>'required'
    	]);
    	
    	$input = $request->all();
    	$user = User::where('email',$input['email'])->first();
    	if($user){
		    if(Auth::attempt(['email'=>$input['email'],'password'=>$input['password']])){
                if($user){
                   return redirect::route('admin.dashboard.index');
                }else{
               	return back()->with('error','User authentication failed');
               }
            }else{
               return back()->with('error','Invalid password provided');
            }

    	}else{
    		return back()->with('error','Invalid email address provided. ');
    	}
    }

    /*logout*/
    public function logout(){
        Session::flush();
        Auth::logout();
        Cache::flush();
        return Redirect::route('login.index');
    }
}
