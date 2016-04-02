<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class Unicode_UserManageController extends Controller{


	
	/**
	*@author: fazeel
	*@param: user id
	*
	*desc:get total,freezed and removed user details by passing the request id to the
	*	  user manager class, getUserDetails()
	*
	*@created: 22/01/16
	*/
	public function getUserDetails($id){

		//get the total users who are login to the account
		//$totalUsers = DB::table('user')->count();

		//get the total removed users who get removed after 2 weeks of freezed account
		//$removedUsers = DB::table('user_account')->where('status','=',0)->count();

		//$freezedUsers = DB::table('user_account')->where('status','=',2)->count();



		$carbon = new Carbon();
		$dt = Carbon::parse($carbon->now());
		$year = $dt->year; 
		$month = $dt->month;
		$day = $dt->day;
		// create testing date
		$knownDate = Carbon::create($year, $month, $day);          
		// set the mock
		Carbon::setTestNow($knownDate);                            
		

		$dayBack[0] = new Carbon('today');
		for($i=1;$i<7;$i++){
			$dayBack[$i] = new Carbon('-'.$i.' days');
		}

		// always clear it !
		Carbon::setTestNow();                                      
		//track users logged in user deatils to fill the user table in dashboard
		$loginResult = DB::table('login')->join('user','login.userid','=','user.id')->groupBy('userid')->get();
		//to update the content's points 
		$points = DB::table('points_plan')->where('id','=',1)->first();
		//track users logged in time deatils to fill the user table in dashboard
		$daysInTimeArray =Unicode_UserManageController::checkIntimeValues($id,$dayBack);

		return view('unicon_admin.index')->with('title','Dashboard')
										 ->with('points',$points)
										 ->with(array(
										 			  'today' => $dayBack[0] ,
										 			  'oneDayBack' => $dayBack[1] , 'twoDayBack' => $dayBack[2] , 'threeDayBack' => $dayBack[3] ,
										 			  'fourDayBack' => $dayBack[4] , 'fiveDayBack' => $dayBack[5] , 'sixDayBack' => $dayBack[6] ))
										 ->with('loginResult',$loginResult)
										 ->with($daysInTimeArray);												  
		
	}

	/**
	*@author: fazeel
	*@param: user id
	*
	*desc:get the logged in time each day of one week 
	*
	*@created: 23/01/16
	*/
	public static function checkIntimeValues($id,$dayBack){

		$dayBackInTime = array();
		$dayBackInTimeLength = array();
		for($r=0;$r<7;$r++){
			//track a particuler user's each day logged in time 
			$dayBackInTime[$r] = DB::table('login')-> where('userid','=',$id)-> where('Date','=',substr($dayBack[$r],0,10))
											 -> select('inTime')->first();
			//to check if there is no login time for a particluler day
			if(isset($dayBackInTime[$r])){
				$values = $dayBackInTime[$r];
				$dayBackInTimeLength[$r] = $values->inTime;
			}else{
				$dayBackInTimeLength[$r] = 0;
			}
		}	

		return $daysInTimeArray = array('todayInTimeLength' => $dayBackInTimeLength[0],
								   'oneDayBackTimeLength' => $dayBackInTimeLength[1], 
								   'twoDayBackTimeLength' => $dayBackInTimeLength[2], 		
								   'threeDayBackTimeLength' => $dayBackInTimeLength[3], 
								   'fourDayBackInTimeLength' => $dayBackInTimeLength[4], 
								   'fiveDayBackInTimeLength' => $dayBackInTimeLength[5], 
								   'sixDayBackInTimeLength' => $dayBackInTimeLength[6]);		 

	} 

	
    
}
