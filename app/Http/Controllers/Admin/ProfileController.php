<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ProfileController extends Controller
{
    public $viewPath = 'admin.profile';

    public function edit(){

       $data['user']=Auth::user();
       return view($this->viewPath.'.editProfile',$data);
    }
    public function update(Request $request){

       $this->validate($request, [
            'first_name'=>'required',
    		'last_name'=>'required',
    		'contact_number'=>'required',
    		'contact_information'=>'required'
       ]);

       $user=Auth::user();
       $user->first_name=$request->first_name;
       $user->last_name=$request->last_name;
       $user->contact_number=$request->contact_number;
       $user->contact_information=$request->contact_information;
       $user->save();

       return redirect()->route('admin.dashboard.index')->with('success','Profile updated successfully.');


    }

}
