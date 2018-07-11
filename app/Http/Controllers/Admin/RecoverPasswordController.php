<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Mail\Admin\AdminPasswordRecovery;

class RecoverPasswordController extends Controller
{

   public $viewPath = 'admin.password';
   
  public function getRecoverPassword(){

  	 return view($this->viewPath.'.recoverPassword');
    
  }
  public function postRecoverPassword(Request $request){

  	  $request->validate(['email'=>'required']);

  	    $email  = $request->email;
        $profile = User::where('email',$email)->first();
        if(count($profile)>0){
            $new_pass = str_random(10);
           
            $data['from_email']     = 'noreply@admin.com';
            $data['form_name']      = "Lobosonda" ;
            $data['to_email']       = $email;
            //$data['to_email']       = 'nasmin.begam@webskitters.com';
            $data['to_name']        =  $profile->first_name;
            $data['password']       = $new_pass;
            
            \Mail::to($data['to_email'])->send(new AdminPasswordRecovery($data));
            
            $profile->password = $new_pass;
            $profile->save();
            return  redirect()->back()->with('success','Password is send to the email address. Please check in your inbox');
        }else{
            return redirect()->back()->with('error','Email is not exists');
        }

  }

}
