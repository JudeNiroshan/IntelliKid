<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use DB;

class EmailController extends Controller
{

    /*
    * @author : A.H.A.T.Dias
    * @desc : send email verification mail to given email account
    * @created : 22/02/2016
    */
	public function emailVerificationNotiece(){


    Mail::send('email_body',['name'=> $_SESSION['NAME'],'id'=> $_SESSION['USERID']], function($message){
		  $message->to($_SESSION['EMAIL'],'IntelliKid')->subject('Welcome to IntelliKid!');
   	 });

    return view('email_verify_notice');

	}



    /*
    * @author : A.H.A.T.Dias
    * @desc : get user id from email link and set user as this user active user and redirect to the home page
    * @created : 22/02/2016
    */          
	public function emailVerifyingMessage(){

	 $id =  $_REQUEST['id'];
     //$result = DB::select("select a.reset_token from parent_registration a where a.user_id = '$id'");
     $result = DB::select("select a.reset_token from parent a where a.user_id = '$id'");

     DB::table('user')->where('id', $id)->update(array('status' => 'ACTIVE'));

     //$result = DB::select("select * from parent_registration a where a.user_id = '$id'");
     $result = DB::select("select * from user a where a.id = '$id'");
     $_SESSION['STATUS'] = $result[0]->status;


     return view('parent.home');

	}


    /*
    * @author : A.H.A.T.Dias
    * @desc : get email token and validate and redirect to login page or reset password page
    * @created : 22/02/2016
    */
	public function emailReset(){


     $email = $_SESSION['EMAIL'];
     $token = $_REQUEST['token'];
    

    // $result = DB::select("select a.user_id,a.reset_token from parent_registration a where a.email = '$email' ");
     $result = DB::select("select a.user_id,a.reset_token from parent a where a.email = '$email' ");

     if($token == $result[0]->reset_token){
		  return view('login');
     }else{
 		 $_SESSION['TOKEN'] = $token;
   		 return view('reset_password');
     }



	}

}
