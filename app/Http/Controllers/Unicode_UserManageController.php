<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class Unicode_UserManageController extends Controller{


	

	public function getUserDetails($id){

		$totalUsers = DB::table('user')->count();

		$removedUsers = DB::table('user_account')->where('status','=',0)->count();

		$freezedUsers = DB::table('user_account')->where('status','=',2)->count();

		//print_r($id);


		$carbon = new Carbon();
		//echo $carbon->now();
		$dt = Carbon::parse($carbon->now());
		$year = $dt->year; 
		$month = $dt->month;
		$day = $dt->day;
		$knownDate = Carbon::create($year, $month, $day);          // create testing date
		Carbon::setTestNow($knownDate);                            // set the mock
		$today = new Carbon('today');
		$oneDayBack = new Carbon('-1 days');
		$twoDayBack = new Carbon('-2 days');
		$threeDayBack = new Carbon('-3 days');
		$fourDayBack = new Carbon('-4 days');
		$fiveDayBack = new Carbon('-5 days');
		$sixDayBack = new Carbon('-6 days');
		Carbon::setTestNow();                                      // always clear it !

		//echo substr($today,8,2);	

		$loginResult = DB::table('login')->join('user','login.userid','=','user.id')->groupBy('userid')->get();

		$daysInTimeArray =Unicode_UserManageController::checkIntimeValues($id);
		print_r($daysInTimeArray['oneDayBackTimeLength']);


		return view('unicon_admin.index')->with('title','Dashboard')
										 ->with(array('totalusers'=>$totalUsers,
										 			  'removedUsers'=>$removedUsers,
										 			  'freezedUsers'=>$freezedUsers,
										 			  'today' => $today ,
										 			  'oneDayBack' => $oneDayBack , 'twoDayBack' => $twoDayBack , 'threeDayBack' => $threeDayBack ,
										 			  'fourDayBack' => $fourDayBack , 'fiveDayBack' => $fiveDayBack , 'sixDayBack' => $sixDayBack ))
										 ->with('loginResult',$loginResult)
										 ->with(array('todayInTimeLength' => $daysInTimeArray['todayInTimeLength'],
										 			  'oneDayBackTimeLength' => $daysInTimeArray['oneDayBackTimeLength'],
										 			  'twoDayBackTimeLength' => $daysInTimeArray['twoDayBackTimeLength'],
										 			  'threeDayBackTimeLength' => $daysInTimeArray['threeDayBackTimeLength'],
										 			  'fourDayBackInTimeLength' => $daysInTimeArray['fourDayBackInTimeLength'],
										 			  'fiveDayBackInTimeLength' => $daysInTimeArray['fiveDayBackInTimeLength'],
										 			  'sixDayBackInTimeLength' => $daysInTimeArray['sixDayBackInTimeLength'],
										 			  ));												  
		
	}

	public static function checkIntimeValues($id){

		$carbon = new Carbon();
		//echo $carbon->now();
		$dt = Carbon::parse($carbon->now());
		$year = $dt->year; 
		$month = $dt->month;
		$day = $dt->day;
		$knownDate = Carbon::create($year, $month, $day);          // create testing date
		Carbon::setTestNow($knownDate);                            // set the mock
		$today = new Carbon('today');
		$oneDayBack = new Carbon('-1 days');
		$twoDayBack = new Carbon('-2 days');
		$threeDayBack = new Carbon('-3 days');
		$fourDayBack = new Carbon('-4 days');
		$fiveDayBack = new Carbon('-5 days');
		$sixDayBack = new Carbon('-6 days');
		Carbon::setTestNow();

		$todayInTime = DB::table('login')-> where('userid','=',$id)-> where('Date','=',substr($today,0,10))
										 -> select('inTime')->get();
		if(isset($todayInTime[0])){
			$todayInTimeLength = $todayInTime[0]->inTime;
		}else{
			$todayInTimeLength = 0;
		}								 


		$oneDayBackInTime = DB::table('login')-> where('userid','=',$id)-> where('Date','=',substr($oneDayBack,0,10))
										 -> select('inTime')->get();
		if(isset($oneDayBackTime[0])){
			$oneDayBackTimeLength = $oneDayBackTime[0]->inTime;
		}else{
			$oneDayBackTimeLength = 0;
		}								 


		$twoDayBackInTime = DB::table('login')-> where('userid','=',$id)-> where('Date','=',substr($twoDayBack,0,10))
										 -> select('inTime')->get();
		if(isset($twoDayBackInTime[0])){
			$twoDayBackTimeLength = $twoDayBackInTime[0]->inTime;
		}else{
			$twoDayBackTimeLength = 0;
		}

		$threeDayBackInTime = DB::table('login')-> where('userid','=',$id)-> where('Date','=',substr($threeDayBack,0,10))
										 -> select('inTime')->get();
		if(isset($threeDayBackInTime[0])){
			$threeDayBackTimeLength = $threeDayBackInTime[0]->inTime;
		}else{
			$threeDayBackTimeLength = 0;
		}

		$fourDayBackInTime = DB::table('login')-> where('userid','=',$id)-> where('Date','=',substr($fourDayBack,0,10))
										 -> select('inTime')->get();
		if(isset($fourDayBackInTime[0])){
			$fourDayBackInTimeLength = $fourDayBackInTime[0]->inTime;
		}else{
			$fourDayBackInTimeLength = 0;
		}	

		$fiveDayBackInTime = DB::table('login')-> where('userid','=',$id)-> where('Date','=',substr($fiveDayBack,0,10))
										 -> select('inTime')->get();
		if(isset($fiveDayBackInTime[0])){
			$fiveDayBackInTimeLength = $fiveDayBackInTime[0]->inTime;
		}else{
			$fiveDayBackInTimeLength = 0;
		}										 

		$sixDayBackInTime = DB::table('login')-> where('userid','=',$id)-> where('Date','=',substr($sixDayBack,0,10))
										 -> select('inTime')->get();
		if(isset($sixDayBackInTime[0])){
			$sixDayBackInTimeLength = $sixDayBackInTime[0]->inTime;
		}else{
			$sixDayBackInTimeLength = 0;
		}

		//print_r($oneDayBackTimeLength);

		return $daysInTimeArray = array('todayInTimeLength' => $todayInTimeLength,
								   'oneDayBackTimeLength' => $oneDayBackTimeLength, 
								   'twoDayBackTimeLength' => $twoDayBackTimeLength, 
								   'threeDayBackTimeLength' => $threeDayBackTimeLength, 
								   'fourDayBackInTimeLength' => $fourDayBackInTimeLength, 
								   'fiveDayBackInTimeLength' => $fiveDayBackInTimeLength, 
								   'sixDayBackInTimeLength' => $sixDayBackInTimeLength, );										 
	} 

	
	


    
}
