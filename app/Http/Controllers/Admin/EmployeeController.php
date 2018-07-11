<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\RoleUser;
use App\User;
use DB;

class EmployeeController extends Controller
{
    public $viewPath = 'admin.employeeManagement';

    public function index(Request $request){
        $keyword = $request->input('keyword');
        $data['keyword']='';
        /*search if keyword is available*/
        if($keyword){
            $data['keyword']= $keyword;
            $employees = User::whereHas('roles', function($q)use($keyword){
                        $q->where('roles.name','!=','admin');

                        $q->where('users.first_name','LIKE','%'.$keyword.'%');
                        $q->orWhere('users.last_name','LIKE','%'.$keyword.'%');
                    })->paginate(10);
          
        }else{
            /*all employee list*/
            $employees = User::whereHas('roles', function($q){
                        $q->where('name','!=','admin');
                    })->paginate(10); 
        }
        $data['employees']=$employees;
    	
        return view($this->viewPath.'.list',$data);
    }

    public function create(){
    	$data['roles'] = Role::where('name','<>','client')->orderBy('name','ASC')->pluck('display_name','id');
        $data['jobs_array']=array('guide'=>'Guide','skipper'=>'Skipper','watchman'=>'Watchman');
    	
        return view($this->viewPath.'.create',$data);
    }

    public function store(Request $request){
        $this->validate($request,[
            'first_name'=>'required|string',
            'last_name'=>'required|string',
            'email'=>'required|unique:users',          
            'role'=>'required',
            'password'=>'required',
            'confirm_password'=>'required',
            'contact_number'=>'required',
            'contact_information'=>'required'      
        ]);

        $input = $request->all();

        $email = User::where('email',$input['email'])->first();
        if($email){
            /*email is already avalilable */
            return back()->with('error','Email already exists');

        }else{
           if($input['password']==$input['confirm_password']){
             
             if($input['role']=='2'){

                if(empty($input['jobs'])){
                     return redirect()->back()->with('error','Please select jobs.')->withInput();
                }
               
             }

            $user = User::create([
                    'first_name'=>$input['first_name'], 
                    'last_name'=>$input['last_name'],                  
                    'email'=>$input['email'],
                    'password'=>bcrypt($input['password']),
                    'contact_number'=>$input['contact_number'],
                    'contact_information'=>$input['contact_information'],                
                  
                    'jobs'=>($input['role']=='2') ? implode(',',$input['jobs']) :'others'
                   ]);
            if($user){
                /*assigning a role to new user*/
              DB::table('role_user')->insert(['user_id'=>$user->id,'role_id'=>$input['role']]);  
            }

            return redirect()->route('employee.index')->with('success','Employee added successfully');

           }else{
            return back()->with('error','Password and Confirm password should match');
           } 
        }
       
    }

    /*
    @param user table id 
    */
    public function edit($id){
        $data['roles'] = Role::where('name','<>','client')->orderBy('name','ASC')->pluck('display_name','id');
        $data['employee'] = User::where('id',$id)->first();

        $data['jobs_array']=array('guide'=>'Guide','skipper'=>'Skipper','watchman'=>'Watchman');


        if($data['employee']){
            return view($this->viewPath.'.edit',$data);
        }else{
            return 'user not found';
        }
    }

    public function update($id,Request $request){
        $this->validate($request,[
            'first_name'=>'required|string',
            'last_name'=>'required|string',
            'email'=>'required|unique:users,email,'.$id,          
            'role'=>'required',
            'contact_number'=>'required',
            'contact_information'=>'required'      
        ]);

        $input = $request->all();
        $employee = User::where('id',$id)->first();

        if($employee){

           if($input['role']=='2'){

                if(empty($input['jobs'])){
                     return redirect()->back()->with('error','Please select jobs.')->withInput();
                }
               
             }

            $employee->update([
                'first_name'=>$input['first_name'], 
                'last_name'=>$input['last_name'],                   
                'email'=>$input['email'],            
                'contact_number'=>$input['contact_number'],
                'contact_information'=>$input['contact_information'],                
                'jobs'=>($input['role']=='2') ? implode(',',$input['jobs']) :'others',
                'status'=>$input['status']
            ]);

            $role = RoleUser::where('user_id',$id)->first();
            if($role){
                $role->update(['role_id'=>$input['role']]);
            }
        }
        return redirect()->route('employee.index')->with('success','Employee updated successfully');
    }


    public function changePassword($id){
        $employee = User::where('id',$id)->first();
        return view($this->viewPath.'.changePassword',compact('employee'));
    }

    public function changePasswordSave(Request $request){
        $this->validate($request,[
            'password'=>'required|min:6',
            'password_confirmation'=>'required|min:6'
        ],['password_confirmation.required'=>'The Confirm Password field is required.']);

        $input = $request->all();
        $employee = User::where('id',$input['user_id'])->first();
        if($employee){
            if($input['password']==$input['password_confirmation']){
                $employee->update([
                'password'=>bcrypt($input['password'])
            ]);
                return redirect()->route('employee.index')->with('success','Password changed successfully.');
            }else{
                return back()->with('error','Password and Confirm password should match');  
            }

        }else{
            return back()->with('error','Use not found.');  
        }
    }

    public function delete($id){

        $user=User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success','Employee deleted successfully');


    }

    
}
