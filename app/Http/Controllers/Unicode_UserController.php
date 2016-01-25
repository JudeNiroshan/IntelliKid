<?php

namespace App\Http\Controllers;
use DB;

class Unicode_UserController extends Controller{


	public function fillUserTable(){
		//JUDE ADDED
		//$result = DB::table('user')->get();

		$result = DB::table('user')->join('user_account', 'user.id', '=', 'user_account.uid')->get();

		//print_r($result);
		return view('unicon_admin.viewusers')->with('title','View | Users')
											 ->with('data',$result); 													  
	}

	public function trackTotalUsers(){

		$totalUsers = DB::table('user')->count();

		$removedUsers = DB::table('user_account')->where('status','=','OFF')->count();

		$freezedUsers = DB::table('user_account')->where('status','=','Freezed')->count();

		//$date = Carbon::create(2016, 1, 23);
		//print_r($date);
		return view('unicon_admin.index')->with('title','Dashboard')
										 ->with(array('totalusers'=>$totalUsers,
										 			  'removedUsers'=>$removedUsers,
										 			  'freezedUsers'=>$freezedUsers)); 													  
		
	}


    
}
