<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use DB;

class EmailController extends Controller
{
    
	public function email_verification_notiece(){


    Mail::send('email_body',['name'=> $_SESSION['NAME'],'id'=> $_SESSION['USERID']], function($message){
		  $message->to($_SESSION['EMAIL'],'IntelliKid')->subject('Welcome to IntelliKid!');
   	 });

    return view('email_verify_notice');



	}

	public function email_verifying_message(){

	 $id =  $_REQUEST['id'];
     $result = DB::select("select a.reset_token from parent_registration a where a.user_id = '$id'");

     DB::table('parent_registration')->where('user_id', $id)->update(array('status' => 'ACTIVE'));

     $result = DB::select("select * from parent_registration a where a.user_id = '$id'");
     $_SESSION['STATUS'] = $result[0]->status;


     return view('parent.home');



	}


	public function emailReset(){


     $email = $_SESSION['EMAIL'];
     $token = $_REQUEST['token'];
     //$_SESSION['TOKEN'] = "0";

     $result = DB::select("select a.user_id,a.reset_token from parent_registration a where a.email = '$email' ");

     if($token == $result[0]->reset_token){
			return view('login');
     }else{
 		 $_SESSION['TOKEN'] = $token;
   		 return view('reset_password');
     }



	}





}
