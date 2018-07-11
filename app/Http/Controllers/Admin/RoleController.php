<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;

class RoleController extends Controller
{
	public $viewPath = 'admin.role';

	public function index(Request $request){
       
       $data['keyword']='';

       if($request->has('keyword')){
         $data['keyword']=$request->keyword;
         $roles=Role::where(function($qry) use ($data){
          $qry->where('name','LIKE','%'.$data['keyword'].'%');
         	$qry->orWhere('display_name','LIKE','%'.$data['keyword'].'%');
         	$qry->orWhere('description','LIKE','%'.$data['keyword'].'%');
         })->orderBy('id','Asc')->paginate(6);

       }else{
         $roles=Role::orderBy('id','Asc')->paginate(6);
       }
 
       $data['roles']=$roles;
       return view($this->viewPath.'.index',$data);
	}
	public function edit($id){

      $role=Role::findOrFail($id);
      $data['role']=$role;
      return view($this->viewPath.'.edit',$data);

	}
    public function update($id,Request $request){
      $request->validate([
          'display_name'=>'required|max:255|unique:roles,display_name,'.$id,
          'description'=>'required'

      	]);
      $role=Role::findOrFail($id);
      extract($request->all());
      $role->update(['display_name'=>$display_name,'description'=>$description]);     
      return redirect()->route('roles.index')->with('success','Role successfully updated.');
	}
    
}
