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
use App\UserRole;

use App\Quotation;

class RegistrationController extends Controller
{
   
   /*
  * @author : A.H.A.T.Dias
  * @desc : get user entered details and validate wether the given email is exists in the database,if not calculate the age and insert data in to database
  * @created : 22/02/2016
  */
	public function registrationUser(Request $request)
	{

			$f_name        = $request->input('f_name');
			$l_name        = $request->input('l_name');
			$email         = $request->input('email');
			$gender        = $request->input('gender');
			$date_of_birth = $request->input('start');
			$password      = $request->input('password');

			$dd = date('Y-m-d');

			//$result = UserRole::selectRaw('parent')->where('email',$email)->get();
		    $result = DB::select("select a.user_id from parent a where a.email = '$email' ");
			
 		 	$birthDate = $date_of_birth;

 			//explode the date to get month, day and year
 			$birthDate = explode("/", $birthDate);

            //get age from date or birthdate
            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
            ? ((date("Y") - $birthDate[2]) - 1)
            : (date("Y") - $birthDate[2]));
            $age_number = intval($age);

  			$dataArray = ['firstname'=>$f_name,'lastname'=>$l_name,'dateOfBirth'=>$date_of_birth,'age'=>$age,'user_type'=>'PARENT','acc_created'=>'now()','acc_updated'=>'now()','img_path'=>'assets/parent/profile/img/baby.png','password'=>$password,'status'=>'P','gender'=>$gender ]; 


			

			 if(count($result)==0)
			 {
			 	/* DB::statement(DB::raw(
                       "INSERT INTO  parent_registration(f_name,l_name,email,u_password,dat_of_birth,age,user_type,craeted_date,status,reset_token,img_path)   values ('$f_name ','$l_name','$email','$password','$date_of_birth','$age','PARENT',now(),'PENDING','0','assets/parent/profile/img/baby.png') ")); 
					*/

          $key = md5(microtime().rand());

			 	 	$Iids = DB::table('user')->insertGetId($dataArray);

			 	 	DB::table('parent')->insert(['email'=>$email,'user_id'=>$Iids,'reset_token'=>$key]);

			 	/*  DB::statement(DB::raw(
                       "INSERT INTO  user(firstname,lastname,dateOfBirth,age,user_type,acc_created,acc_updated,img_path,password,status,gender)   values ('$f_name','$l_name','$date_of_birth','$age','PARENT',now(),null,'assets/parent/profile/img/baby.png','$password','PENDING','$gender') "));
					*/



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

			$result1 = DB::select("select count(email) as id,p.user_id 
									from parent p,user u 
									where p.email = '$email' and u.password  = '$password' and p.user_id = u.id ");

			return response()->json(['list' => $result1,'message'=>$out_put]);
  			
			
	}




    /*
   * @author : A.H.A.T.Dias
   * @desc : check login password and email response to ajax 
   * @created : 22/02/2016
   */
	public function login(Request $request)
	{
			$email    = $request->input('un');
			$password = $request->input('pw');


			//$result = DB::select("select count(a.user_id) as id,a.user_id from parent_registration a where a.email = '$email' and a.u_password = '$password' ");
			//$result = UserRole::selectRaw('user_id, count(user_id) as id')->where('email',$email)->where('u_password',$password)->get();
			$result = DB::select("select count(email) as id,p.user_id 
									from parent p,user u 
									where p.email = '$email' and u.password  = '$password' and p.user_id = u.id");
			return response()->json(['list' => $result]);
			
	}




   /*
   * @author : A.H.A.T.Dias
   * @desc : check wether given email is valid email or not and response to the ajax
   * @created : 22/02/2016
   */
	public function resetPassword(Request $request){

		$email = $request->input('email');
		$_SESSION['EMAIL'] = $email;
		$token = rand();
		
		//$result = DB::select("select a.user_id,a.reset_token from parent_registration a where a.email = '$email' ");
		 // $result = UserRole::selectRaw('user_id','reset_token')->where('email',$email)->get();
		$result = DB::select("select p.user_id,p.reset_token from parent p where p.email = '$email'");
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



   /*
   * @author : A.H.A.T.Dias
   * @desc : set a new password from email data by validation Token value
   * @created : 22/02/2016
   */
	public function setNewPassword(Request $request){

				$password = $request->input('pw');
				$email = $_SESSION['EMAIL'];
				$token = $_SESSION['TOKEN'];


				//$result = DB::select("select a.user_id from parent_registration a where a.email = '$email' ");


				$result = DB::select("select p.user_id from parent p where p.email = '$email' ");
				$userID = $result[0]->user_id;
				DB::table('user')->where('id', $userID)->update(array('password' => $password));
				DB::table('parent')->where('user_id', $userID)->update(array('reset_token'=>$token));
				
				$out = 0;
				
				 return response()->json(['list' => $result,'email'=>$email]);

	}


   /*
   * @author : A.H.A.T.Dias
   * @desc : Set allthe details to the session 
   * @created : 22/02/2016
   */
	public function setSession(){

			 
         $id = $_REQUEST['id'];

          //$result = DB::select("select * from parent_registration a where a.user_id = '$id'");

          $result = DB::select("select * from user u where id = '$id'");
          $resultE = DB::select("select * from parent p where p.user_id = '$id'");


          $_SESSION['USERID'] = $id;
          $_SESSION['STATUS'] = $result[0]->status;
          $_SESSION['NAME']   = $result[0]->firstname." ".$result[0]->lastname;
          $_SESSION['EMAIL']  = $resultE[0]->email;


          $video_item_que = array();
	 	  $_SESSION['video_que']  = $video_item_que;

	 	  $story_item_que = array();
	 	  $_SESSION['story_que']  = $story_item_que;

	 	  $audio_item_que = array();
	 	  $_SESSION['audio_que']  = $audio_item_que;

	 	  $quiz_item_que = array();
	 	  $_SESSION['quiz_que']  = $quiz_item_que;

	 	   $dates = array();
	 	  $_SESSION['S_DATES'] = $dates;

         
          return redirect()->action('RegistrationController@defaultHome');

	}



    /*
   * @author : A.H.A.T.Dias
   * @desc : Redirecttohome page with schedule details
   * @created : 22/02/2016
   */
	public function defaultHome(){

			$id = $_SESSION['USERID'];

			$date = DB::select("SELECT  STR_TO_DATE(dueTime, '%m/%d/%Y') as s_date,fk_parent_id,dueTime
		                        FROM shedule where  STR_TO_DATE(dueTime, '%m/%d/%Y') >= now() and fk_parent_id = '$id' group by s_date order by s_date asc Limit 4");

		




	  $vedio_items = array();
      $story_items = array();
      $audio_items = array();
      $quiz_items  = array();
    


      $vids = DB::select("select video_id from video_shedule where shedule_id in (select id from shedule where fk_parent_id = '$id' ) group by video_id");
      $sids = DB::select("select story_id from story_schedule where schedule_id in (select id from shedule where fk_parent_id = '$id' ) group by story_id");
      $aids = DB::select("select audio_id from audio_shedule where shedule_id in (select id from shedule where fk_parent_id = '$id' ) group by audio_id");
      $qids = DB::select("select exam_id from exam_schedule where schedule_id in (select id from shedule where fk_parent_id = '$id' ) group by exam_id");


         foreach ($vids as $v) {

            array_push($vedio_items, $v->video_id);
          }
         foreach ($sids as $s) {

            array_push($story_items, $s->story_id);
          }
         foreach ($aids as $a) {

            array_push($audio_items, $a->audio_id);
          }
         foreach ($qids as $q) {

            array_push($quiz_items, $q->exam_id);
          }


         /* $_SESSION['c_story_que'] = $story_items ;

          $_SESSION['c_video_que'] = $vedio_items ;

          $_SESSION['c_audio_que'] = $audio_items ;

          $_SESSION['c_quiz_que']  = $quiz_items ;*/

          $content_v = array();
          $content_s = array();
          $content_a = array();
          $content_q = array();

          for($i=0;$i<sizeof($vedio_items);$i++){

           $id = $vedio_items[$i];
           $data = DB::select("select * from video where id='$id' ");

           $content_v[$i][0]= $id;
           $content_v[$i][1]= $data[0]->name;
           $content_v[$i][2]= $data[0]->img_path;
           $content_v[$i][3]= $data[0]->agegroupid;

        }

          for($k=0;$k<sizeof($story_items);$k++){

          $id = $story_items[$k];

          $data = DB::select("select a.*,m.* from story a,story_image m where a.id='$id' ");

           $content_s[$k][0]= $id;
           $content_s[$k][1]= $data[0]->name;
           $content_s[$k][2]= $data[0]->path;
           $content_s[$k][3]= $data[0]->agegroupid;

        }

        for($k=0;$k<sizeof($audio_items);$k++){

          $id = $audio_items[$k];
          $data = DB::select("select * from audio where id='$id' ");

           $content_a[$k][0]= $id;
           $content_a[$k][1]= $data[0]->name;
           $content_a[$k][2]= $data[0]->img_path;
           $content_a[$k][3]= $data[0]->agegroupid;

        }

        for($k=0;$k<sizeof($quiz_items);$k++){

          $id = $quiz_items[$k];
          $data = DB::select("select * from exam_question where exam_id = '$id' group by exam_id ");

           $content_q[$k][0]= $id;
           $content_q[$k][1]= $data[0]->exam_id;
           //$content_a[$k][2]= $data[0]->img_path;
           //$content_a[$k][3]= $data[0]->agegroupid;

        }



          
         return view('parent.home')
                ->with('dates',$date)
                ->with('content_v',$content_v)
                ->with('content_s',$content_s)
                ->with('content_a',$content_a)
                ->with('content_q',$content_q);

	}

  public function EditParent(){



    
  }


	



}
