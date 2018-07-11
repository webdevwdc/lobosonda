<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Hash;

class ChangePasswordController extends Controller
{   
	/*view path*/
    public $viewPath = 'admin.password';

    public function index(){
      return view($this->viewPath.'.index');
    }
    
    /*change password of logged in user*/
    public function store(Request $request){
    	$this->validate($request,[
         'old_password'=>'required',
         'password'=>'required',
         'password_confirmation'=>'required',
    	]);
    	$input = $request->all();

    	$user = User::where('id',Auth::user()->id)->first();
    	if($user){
           if($input['password']==$input['password_confirmation']){

            if(!Hash::check($input['old_password'], $user->password)){

                return back()->with('error','Incorrect old password.');
            }else{
               
                $user->update([
                'password'=>bcrypt($input['password'])             
                ]);
              return back()->with('success','Password changed successfully.');
            }



           }else{
           	    return back()->with('error','Password and Confirm password should match.');
           }
    	}else{
    		return 'User not found';
    	}
    }
}
