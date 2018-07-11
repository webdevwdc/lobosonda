<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\StaffTask;

class StaffTaskController extends Controller
{
    public $viewPath = 'admin.attribute';

    public function index(Request $request){

        $data['keyword']='';
        $keyword = $request->input('keyword');
        if($keyword){
            $data['keyword']=$keyword;
            $staffTasks = StaffTask::orderBy('task_name','ASC')
                        ->where('task_name','LIKE','%'.$keyword.'%')->paginate(10);
        }else{
            $staffTasks = StaffTask::orderBy('task_name','ASC')->paginate(10);
        }

        $data['staffTasks']=$staffTasks;
    	
    	return view($this->viewPath.'.list',$data);
    }

    public function create(){
    	return view($this->viewPath.'.create');
    }

    public function store(Request $request){
    	$this->validate($request,['task_name'=>'required|string']);
    	$input = $request->all();
    	StaffTask::create($input);
    	return redirect()->route('staffTask.index')->with('success','Attribute added successfully');

    }

    public function edit($id){
        $attribute = StaffTask::where('id',$id)->first();
    	return view($this->viewPath.'.edit',compact('attribute'));	
    }

    public function update(Request $request){
    	$this->validate($request,['task_name'=>'required|string']);
    	$input = $request->all();
    	$attribute = StaffTask::where('id',$input['attribute_id'])->first();
    	if($attribute){
    		$attribute->update($input);
    		return redirect()->route('staffTask.index')->with('success','Attribute updated successfully');
    	}else{
    		return "attribute not found";
    	}
    }

    public function delete($id){
        $attribute = StaffTask::where('id',$id)->first();
        if($attribute){
            $attribute->delete();
            return redirect()->route('attribute.index')->with('success','Staff Task deleted successfully');
        }else{
            return "Staff Task not found";
        }

    }
}
