<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class Unicode_StaticManageController extends Controller{

	/**
	*@author: fazeel
	*@param: user id
	*desc:to check each child proformance within a month by track the points system 
	*@created: 01/02/16
	*/
	public function getChildProformance($id){

		//$result = DB::table('user')->join('user_account', 'user.id', '=', 'user_account.user_id')->get();

		$carbon = new Carbon();
		$dt = Carbon::parse($carbon->now());
		$year = $dt->year; 
		$month = $dt->month;
		$day = $dt->day;
		$knownDate = Carbon::create($year, $month, $day);          
		Carbon::setTestNow($knownDate); 

		$pointsArray;
		for($i=0;$i<30;$i++){
			
			$pointsArray[$i]=0;

			if ($i == 0 ) {
				$days[$i] = new Carbon('today');
			}else{
				$days[$i] = new Carbon('-'.$i.' days');
			}
		}
		// to clear
		Carbon::setTestNow();        

		$daysPointsValuesArray = Unicode_StaticManageController::checkPointsValues($id,$days);

    	 foreach($daysPointsValuesArray as $key => $object){
    	 	$pointsArray[$key]=$object;
         } 

        $loginResult = DB::table('child')->join('user','child.id','=','user.id')->get(); 

		return view('unicon_admin.statistic')->with('title','Statistics')
											 ->with('pointsArray',$pointsArray)
											 ->with('days',$days)
											 ->with('loginResult',$loginResult)
											 ->with(array('year' =>$year,'month'=>$month,'day'=>$day));
											 //->with('data',$result); 
	}


	/**
	*@author: fazeel
	*@param: userid, days[]
	*
	*desc:get each childs total points by every day within a month 
	*
	*@created: 03/02/16
	*/

	public static function checkPointsValues($id,$days){

		$daysPoints;
		$daysPointsValues;

		for($r=0;$r<30;$r++){
			$daysPoints[$r] = DB::table('points')-> where('child_id','=',$id)-> where('date','=',substr($days[$r],0,10))
											 -> select('points')->get();

			foreach ($daysPoints[$r] as $key => $object) {
    			
    			if($object!=null){
					$daysPointsValues[$r] = (int)$object->points;

				}else{
					
					$daysPointsValues[$r]= 0;
				}
    			
			}
			
		}

    	return $daysPointsValues;	
	} 
    
}
