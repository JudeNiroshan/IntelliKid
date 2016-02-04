<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class Unicode_UserController extends Controller{


	public function fillUserTable(){

		//$result = DB::table('user')->get();

		$result = DB::table('user')->join('user_account', 'user.id', '=', 'user_account.user_id')->get();

		//print_r($result);
		
		return view('unicon_admin.viewusers')->with('title','View | Users')
											 ->with('data',$result); 													  
	}

	public function trackTotalUsersABC(){
		print_r("url called");
	}

	public function trackTotalUsers(Request $request){

		$totalUsers = DB::table('user')->count();

		$removedUsers = DB::table('user_account')->where('status','=',0)->count();

		$freezedUsers = DB::table('user_account')->where('status','=',2)->count();

		$userManage = new Unicode_UserManageController();

		//print_r("Hello");

		
		
		
		if($request->id!= null){
			//echo "HID is ";
			return $userManage->getUserDetails($request->id);
			
		}else{
			$loginResult = DB::table('login')->join('user','login.userid','=','user.id')->groupBy('userid')->first();
			return $userManage->getUserDetails($loginResult->id);
		}		

		//print_r("Hello this");									  
		
	}

	public function renderViewTable(){

		//$result = DB::table('user')->get();

		$result = DB::table('user')->join('user_account', 'user.id', '=', 'user_account.user_id')->get();

		//print_r($result);
		
		return view('unicon_admin.view')->with('title','View')->with('data',$result);
										  													  
		
	}
	


    
}
