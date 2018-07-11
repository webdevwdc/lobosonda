<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use App\Models\Booking;
use App\Models\Trip;

class BookingController extends Controller
{
	public function index(Request $request){
		$data = array();
		$events = [];
		$list = Booking::orderBy('id','DESC')->get();
		//echo "<pre>"; print_r($list); echo "</pre>"; die;
	
		// foreach($list as $k => $v){
		// 	echo $isAllBook = $v->trip->isAllBook;
		// 	$trip_name = $v->trip->title;
		// 	$trip_date = $v->trip->date;
		// 	$trip_start_time = $v->trip->from_time;
		// 	$trip_end_time = $v->trip->to_time;
		// 	$trip_start_date_time = $trip_date." ".$trip_start_time; 
		// 	$trip_end_date_time = $trip_date." ".$trip_end_time;
		// 	$eventname = $trip_name." [ ".$trip_start_time."-".$trip_end_time."]";
			
			
		// 	if($isAllBook == "Yes"){
		// 		$events[] = \Calendar::event($eventname,true,$trip_date,$trip_date,$v->id,['color' => '#09AB09',]);	
		// 	}
		// 	elseif($isAllBook == "No"){
		// 		$events[] = \Calendar::event($eventname,true,$trip_date,$trip_date,$v->id,['color' => '#800',]);	
		// 	}
			
		// }
		//echo "<pre>"; print_r($events); echo "</pre>"; die;


		


		
		$calendar = \Calendar::addEvents($events) //add an array with addEvents
				->setOptions([ ['firstDay'=>1,'height'=>200,'aspectRatio'=>1.20,]
				    ])->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
				    'viewRender' => "function() {
                       alert('ok');

				    }"
				]);
		
		return view('admin.booking.index', compact('calendar'));				
	}
}
