<?php

namespace App\Http\Controllers;
use DB;

class Unicode_UserController extends Controller{


	public function fillUserTable(){

		//$result = DB::table('user')->get();

		$result = DB::table('user')->join('user_log', 'user.uid', '=', 'user_log.uid')->get();

		//print_r($result);
		return view('unicon_admin.viewusers')->with('title','View | Users')
											 ->with('data',$result); 													  
	}

	public function trackTotalUsers(){

		$totalUsers = DB::table('user')->count();

		$removedUsers = DB::table('user_log')->where('status','=','OFF')->count();

		$freezedUsers = DB::table('user_log')->where('status','=','Freezed')->count();

		$date = Carbon::create(2016, 1, 23);
		print_r($date);
		/*return view('unicon_admin.index')->with('title','Dashboard')
										 ->with(array('totalusers'=>$totalUsers,
										 			  'removedUsers'=>$removedUsers,
										 			  'freezedUsers'=>$freezedUsers)); 													  
		*/
	}


    
}
