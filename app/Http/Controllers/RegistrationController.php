<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Mail;
use App\Jobs\DashboardQueue;

use App\Quotation;

class RegistrationController extends Controller
{
    

	public function registration_user(Request $request)
	{

			$f_name        = $request->input('f_name');
			$l_name        = $request->input('l_name');
			$email         = $request->input('email');
			$gender        = $request->input('gender');
			$date_of_birth = $request->input('start');
			$password      = $request->input('password');

			$dd = date('Y-m-d');

			$result = DB::select("select a.user_id from parent_registration a where a.email = '$email' ");
			
 		 	$birthDate = $date_of_birth;

 			//explode the date to get month, day and year
 			$birthDate = explode("/", $birthDate);

            //get age from date or birthdate
            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
            ? ((date("Y") - $birthDate[2]) - 1)
            : (date("Y") - $birthDate[2]));
            $age_number = intval($age);

  			
			

			 if(empty($result))
			 {
			 	 DB::statement(DB::raw(
                       "INSERT INTO  parent_registration(f_name,l_name,email,u_password,dat_of_birth,age,user_type,craeted_date,status,reset_token,img_path)   values ('$f_name ','$l_name','$email','$password','$date_of_birth','$age','PARENT',now(),'PENDING','0','assets/parent/profile/img/baby.png') "));  
			 	$out_put = 1;
			 }
			 else
			 {
				$out_put = 0;
			 }
			if($age_number < 18)
			{

  			    $out_put = 2;
  			}

			$result1 = DB::select("select count(a.user_id) as id,a.user_id from parent_registration a where a.email = '$email' and a.u_password = '$password' ");
			return response()->json(['list' => $result1,'message'=>$out_put]);
  			
			
	}


	public function login(Request $request)
	{
			$email = $request->input('un');
			$password = $request->input('pw');


			$result = DB::select("select count(a.user_id) as id,a.user_id from parent_registration a where a.email = '$email' and a.u_password = '$password' ");
			return response()->json(['list' => $result]);
			


	}
	public function reset_password(Request $request){

		$email = $request->input('email');
		 $_SESSION['EMAIL'] = $email;
		  $token = rand();
		
		$result = DB::select("select a.user_id,a.reset_token from parent_registration a where a.email = '$email' ");

		if(empty($result))
			 {  $out_put = 0;
			 	
			 }
			
			 else{


				Mail::send('reset_link',['link'=>'reset_password_intellikid_2016_encript_version' ,'id'=> $result[0]->user_id,'token'=>$token], function($message){

				$message->to($_SESSION['EMAIL'],'IntelliKid')->subject('Reset password link of IntelliKid');
				
					});
				$out_put = 1;
			 }

			 return response()->json(['message' => $out_put,'email' => $email]);


	}
	public function set_new_password(Request $request){

				$password = $request->input('pw');
				$email = $_SESSION['EMAIL'];
				$token = $_SESSION['TOKEN'];


				$result = DB::select("select a.user_id from parent_registration a where a.email = '$email' ");
				DB::table('parent_registration')->where('email', $email)->update(array('u_password' => $password,'reset_token'=>$token));
				$out = 0;
				
				 return response()->json(['list' => $result,'email'=>$email]);

	}



	public function setSession(){

			 
         $id = $_REQUEST['id'];

          $result = DB::select("select * from parent_registration a where a.user_id = '$id'");

          $_SESSION['USERID'] = $id;
          $_SESSION['STATUS'] = $result[0]->status;
          $_SESSION['NAME']   = $result[0]->f_name." ".$result[0]->l_name;
          $_SESSION['EMAIL']  = $result[0]->email;


          return view('parent.home');





	}






	



}
