<?php

namespace App\Http\Controllers;

use Session;
use DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class Unicode_Login extends Controller{

	/**
	*@author: fazeel
	*@param: post request <-- username,password
	*@desc:	check whether username and password is correct. 
	*@created: 20/02/16
	*/
	public function loginAuthentication(Request $request){

			$email = $request->input('username');
			$password = $request->input('password');

			$userManage = new Unicode_UserManageController();  

			$reuslt = DB::table('user')->where('user_type','=','admin')->first();

			$_SESSION['user_id'] = $reuslt->id;

			$admin_details = DB::table('admin')->where('id','=',$reuslt->id)->first();
	
			if($email == $admin_details->email && $password == $reuslt->password){

				$loginResult = DB::table('login')->join('user','login.userid','=','user.id')->groupBy('userid')->first();
				
				return $userManage->getUserDetails($loginResult->id);
			}else{
				return view('unicon_admin.login')->with('title','Admin | Login')->with('status',true);
			}
	}

	/**
	*@author: fazeel
	*@param: none
	*
	*@desc:	logout from admin account by distroying session 
	*
	*@created: 20/02/16
	*/
	public function adminLogout(){
		session_unset();
    	session_destroy();
		return view('unicon_admin.login')->with('title','Admin | Login')->with('status',false);
	}	
    
}
