<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class Unicode_UserController extends Controller{


	/**
	*@author: fazeel
	*@desc:fach data from user and user account table to fill the dynamic table
	*@created: 20/01/16
	*/
	public function fillUserTable(){

		/*$result = DB::table('user')->join('user_account', 'user.id', '=', 'user_account.user_id')->get();

		return view('unicon_admin.viewusers')->with('title','View | Users')
											 ->with('data',$result); 	*/	

		$result = DB::table('user')->get();	
		
		return view('unicon_admin.viewusers')->with('title','View | Users')
											 ->with('data',$result); 								 

	}

	

	/**
	*@author: fazeel
	*@param: post request
	*desc:get total,freezed and removed user details by passing the request id to the
	*	  user manager class, getUserDetails()
	*@created: 22/01/16
	*/
	public function trackTotalUsers(Request $request){

		$userManage = new Unicode_UserManageController();

		//check whether the page loding 1st time or not
		if($request->id!= null){
			//when the admin choosed a user
			return $userManage->getUserDetails($request->id);
		}else{
			//when the page loading at first time
			$loginResult = DB::table('login')->join('user','login.userid','=','user.id')->groupBy('userid')->first();

			return $userManage->getUserDetails($loginResult->id);
		}		

	}


	/*// this function going to be removed after testing 
	public function renderViewTable(){

		//$result = DB::table('user')->get();

		$result = DB::table('user')->join('user_account', 'user.id', '=', 'user_account.user_id')->get();

		//print_r($result);
		
		return view('unicon_admin.view')->with('title','View')->with('data',$result);
										  													  
		
	}*/
	

}
