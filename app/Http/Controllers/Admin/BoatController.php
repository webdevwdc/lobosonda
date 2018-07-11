<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Boat;

class BoatController extends Controller
{
    public $viewPath = 'admin.boat';
    
    public function index(Request $request){
      $boats = Boat::orderBy('name','ASC')->get();
      return view($this->viewPath.'.index',compact('boats'));

    }
    public function edit(Boat $boat){
      $data['boat']=$boat;
      return view($this->viewPath.'.edit',$data);

    }
    public function update(Boat $boat,Request $request){

        $request->validate([
        'name' => 'required|max:255|unique:boats,name,'.$boat->id,
        'seats' => 'required|numeric',
        'crew' => 'required|numeric',
        'description'=>'required'
        ]);
        
        $boat->update($request->all()); 
        return redirect()->route('boat.index')->with('success','Boat successfully updated.');

    }


}
