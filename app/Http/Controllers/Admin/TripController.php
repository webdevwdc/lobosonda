<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\Trip;
use App\Models\Boat;
use App\Models\TripAssign;
use App\Models\SpeciesMaster;
use App\Models\StaffTask;
use App\Models\TripReport;
use App\Models\TripAttribute;
use App\User;
use DB;

class TripController extends Controller
{
    public $viewPath = 'admin.tripManagement';

    public function index(Request $request){

        // dd(99);
        $keyword = $request->input('keyword');
        /*search if keyword is available*/
        if($keyword){
            $trips = Trip::where(function($q)use($keyword){
                            $q->where('date',$keyword);
                            $q->orWhere('description','LIKE','%'.$keyword.'%');
                        })
                        ->where('status', 'Active')
                        ->orWhere('status', 'Complete')
                        ->paginate(10);
          
        }else{
            /*all trips list*/
            $trips = Trip::where('status', 'Active')->orWhere('status', 'Complete')->paginate(10);
        }
    	
       return view($this->viewPath.'.index',compact('trips', 'keyword'));
    }

    public function create(){
        $data['guides'] = User::whereRaw('FIND_IN_SET("guide", jobs)')
         ->select(DB::raw("CONCAT(first_name,' ',last_name) AS full_name"),'id')
         ->pluck('full_name', 'id');

        $data['skippers'] = User::whereRaw('FIND_IN_SET("skipper", jobs)')
        ->select(DB::raw("CONCAT(first_name,' ',last_name) AS full_name"),'id')
         ->pluck('full_name', 'id');

        $data['watchmans'] = User::whereRaw('FIND_IN_SET("watchman", jobs)')
         ->select(DB::raw("CONCAT(first_name,' ',last_name) AS full_name"),'id')
         ->pluck('full_name', 'id');

        $data['boats'] = Boat::pluck('name', 'id');
    	
        return view($this->viewPath.'.create', $data);
    }

    public function store(Request $request){
        $input = $request->all();

        $input['date'] = str_replace('/', '-', $input['date_submit']);
        $input['status'] = 'Active';
        unset($input['date_submit']);

        
        $tripAssign[] = '';
        $tripAssign[] = '';

        $this->validate($request,[
            'title'=>'required',
            'date'=>'required',
            'from_time'=>'required',
            'to_time'=>'required',
            'boat_id'=>'required',
            'guide_id'=>'required',
            'skipper_id'=>'required',
            'watchman_id'=>'required',
            'meeting_point'=>'required', 
            'description'=>'required', 
            // 'status'=>'required',   
        ]);

        $tripData = Trip::create($input);

        if($tripData)
        {
            if(isset($input['skipper_id']))
            {
                $tripAssign[0]['trip_id'] = $tripData->id;
                $tripAssign[0]['user_id'] = $input['skipper_id'];
                $tripAssign[0]['attribute_id'] = 2;
            }

            if(isset($input['guide_id']))
            {
                $tripAssign[1]['trip_id'] = $tripData->id;
                $tripAssign[1]['user_id'] = $input['guide_id'];
                $tripAssign[1]['attribute_id'] = 3;
            }

            if(isset($input['watchman_id']))
            {
                $tripAssign[2]['trip_id'] = $tripData->id;
                $tripAssign[2]['user_id'] = $input['watchman_id'];
                $tripAssign[2]['attribute_id'] = 4;
            }

            TripAssign::insert($tripAssign);
        }

        return redirect()->route('trip.index')->with('success','Trip added successfully');
    }

    /*
    @param user table id 
    */
    public function edit($id){
        $data['trip'] = Trip::where('id', $id)->where('status','<>', 'Inactive')->first();

        $data['guides'] = User::whereRaw('FIND_IN_SET("guide", jobs)')
         ->select(DB::raw("CONCAT(first_name,' ',last_name) AS full_name"),'id')
         ->pluck('full_name', 'id');

        $data['skippers'] = User::whereRaw('FIND_IN_SET("skipper", jobs)')
         ->select(DB::raw("CONCAT(first_name,' ',last_name) AS full_name"),'id')
         ->pluck('full_name', 'id');

        $data['watchmans'] = User::whereRaw('FIND_IN_SET("watchman", jobs)')
         ->select(DB::raw("CONCAT(first_name,' ',last_name) AS full_name"),'id')
         ->pluck('full_name', 'id');

        $data['boats'] = Boat::pluck('name', 'id');


        return view($this->viewPath.'.edit',$data);
    }

    public function update($id,Request $request){
        $input = $request->all();

        $input['date'] = str_replace('/', '-', $input['date_submit']);
        $input['status'] = 'Active';
        unset($input['date_submit']);


        $this->validate($request,[
            'title'=>'required',
            'date'=>'required',
            'from_time'=>'required',
            'to_time'=>'required',
            'boat_id'=>'required',
            'guide_id'=>'required',
            'skipper_id'=>'required',
            'watchman_id'=>'required',
            'meeting_point'=>'required', 
            'description'=>'required', 
            'status'=>'required', 
        ]);

        $trip = Trip::where('id',$id)->first();

        $thisStatus = $trip->update($input);

        if($thisStatus)
        {
            if(isset($input['skipper_id']))
            {
                $tripAssign[0]['trip_id'] = $trip->id;
                $tripAssign[0]['user_id'] = $input['skipper_id'];
                $tripAssign[0]['attribute_id'] = 2;
            }

            if(isset($input['guide_id']))
            {
                $tripAssign[1]['trip_id'] = $trip->id;
                $tripAssign[1]['user_id'] = $input['guide_id'];
                $tripAssign[1]['attribute_id'] = 3;
            }

            if(isset($input['watchman_id']))
            {
                $tripAssign[2]['trip_id'] = $trip->id;
                $tripAssign[2]['user_id'] = $input['watchman_id'];
                $tripAssign[2]['attribute_id'] = 4;
            }

            // TripAssign::insert($tripAssign);

            foreach($tripAssign as $each)
            {
                $item = TripAssign::firstOrNew(['trip_id' => $each['trip_id'], 'attribute_id' => $each['attribute_id']]);

                $item->trip_id = $each['trip_id'];
                $item->attribute_id = $each['attribute_id'];
                $item->user_id = $each['user_id'];

                $item->save();
            }
        }

        return redirect()->route('trip.index')->with('success','Trip updated successfully');
    }


    public function changePassword($id){
        $employee = User::where('id',$id)->first();
       // return view($this->viewPath.'.index',compact('employee'));
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

    public function completeTrip($id)
    {
        $data['guides'] = User::whereRaw('FIND_IN_SET("guide", jobs)')
         ->select(DB::raw("CONCAT(first_name,' ',last_name) AS full_name"),'id')
         ->pluck('full_name', 'id');

        $data['skippers'] = User::whereRaw('FIND_IN_SET("skipper", jobs)')
        ->select(DB::raw("CONCAT(first_name,' ',last_name) AS full_name"),'id')
         ->pluck('full_name', 'id');

        $data['watchmans'] = User::whereRaw('FIND_IN_SET("watchman", jobs)')
         ->select(DB::raw("CONCAT(first_name,' ',last_name) AS full_name"),'id')
         ->pluck('full_name', 'id');

        $data['boats'] = Boat::pluck('name', 'id');

        $data['species'] = SpeciesMaster::where('status', 'Active')->select(DB::raw("CONCAT(scientific_name,' - ',common_name) AS species_name"),'id')
         ->pluck('species_name', 'id');

         $data['staffTasks'] = StaffTask::where('status', 'Active')->get();

         $data['tripID'] = $id;
        
        return view($this->viewPath.'.complete', $data);
    }

    public function completeTripPost($tripID, Request $request)
    {
        try
        {
            $tripReport = $request->all();
            $tripReport['trip_id'] = $tripID;

            $this->validate($request,[
                "lattitude" => "required",
                "longitude" => "required",
                "min_depth" => "required",
                "max_depth" => "required",
                "visibility_in_miles" => "required",
                "presence_os_calfs" => "required",
                "species" => "required",
                "behaviour" => "required",
                "notes" => "required",
                "winds" => "required",
                "tides" => "required",
                "moon_fase" => "required",
                "skipper" => "required",
                "guide" => "required",
                "watchman" => "required" 
            ]);

            TripReport::create($tripReport);

            if(isset($request->docking))
            {
                $tripAttribute[0]['trip_id'] = $tripID;
                $tripAttribute[0]['attribute_id'] = 1;
                $tripAttribute[0]['time_in_minutes'] = $request->docking;
            }

            if(isset($request->skipper))
            {
                $tripAttribute[1]['trip_id'] = $tripID;
                $tripAttribute[1]['attribute_id'] = 2;
                $tripAttribute[1]['time_in_minutes'] = $request->skipper;
            }

            if(isset($request->guide))
            {
                $tripAttribute[2]['trip_id'] = $tripID;
                $tripAttribute[2]['attribute_id'] = 3;
                $tripAttribute[2]['time_in_minutes'] = $request->guide;
            }

            if(isset($request->watchman))
            {
                $tripAttribute[3]['trip_id'] = $tripID;
                $tripAttribute[3]['attribute_id'] = 4;
                $tripAttribute[3]['time_in_minutes'] = $request->watchman;
            }

            if(isset($request->refuel))
            {
                $tripAttribute[4]['trip_id'] = $tripID;
                $tripAttribute[4]['attribute_id'] = 5;
                $tripAttribute[4]['time_in_minutes'] = $request->refuel;
            }

            if(isset($request->newyear))
            {
                $tripAttribute[5]['trip_id'] = $tripID;
                $tripAttribute[5]['attribute_id'] = 7;
                $tripAttribute[5]['time_in_minutes'] = $request->newyear;
            }

            TripAttribute::insert($tripAttribute);

            $trip = Trip::where('id',$tripID)->first();

            $trip->status = 'Complete';
            $trip->save();

            return redirect()->route('trip.index')->with('success','Trip completed successfully');
        }
        catch(Exception $e)
        {
            return redirect()->route('trip.index')->with('danger','Please double check your entries.');
        }
    }

    
}
