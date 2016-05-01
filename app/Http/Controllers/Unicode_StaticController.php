<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class Unicode_StaticController extends Controller{

	/**
	*@author: fazeel
	*@param: post request
	*desc:get child proformance by points system
	*@created: 01/02/16
	*/
	public function showStatistics(Request $request){


		$userManage = new Unicode_StaticManageController();

		if($request->id!= null){
			return $userManage->getChildProformance($request->id);
		}else{
			$childResult = DB::table('child')->first();

			return $userManage->getChildProformance($childResult->id);
		}		

		//return view('unicon_admin.statistic')->with('title','Statistics');
											 //->with('data',$result); 
	}
    
}
	