<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\observer\Subject;
use App\observer\Audio;
use App\observer\Video;
use App\observer\Songs;
use App\observer\Quiz;
use App\observer\Slton;

class scheduleController extends Controller
{

   /*
   * @author : A.H.A.T.Dias
   * @desc : Call all selected items and send it to the view page
   * @created : 22/02/2016
   */
    public function ViewAllSelectedItems(){

  		$id = $_SESSION['USERID'];


  		$vedio_items = array();
	    $vedio_items = $_SESSION['video_que'];

	    $story_items = array();
	    $story_items = $_SESSION['story_que'];

      $audio_items = array();
      $audio_items = $_SESSION['audio_que'];

      $quiz_items = array();
      $quiz_items = $_SESSION['quiz_que'];


      $video_data = array(array(),array());
      $story_data = array(array(),array());
      $audio_data = array(array(),array());
      $quiz_data  = array(array(),array());


  		$video_count = sizeof($vedio_items);
  		$story_count = sizeof($story_items);
      $audio_count = sizeof($audio_items);
      $quiz_count  = sizeof($quiz_items);

      $videos = array();

      if(!empty($vedio_items)){
      $i=0;
      foreach($vedio_items as $vedio_items){

      $vid = $vedio_items;
  		$videos = DB::select(DB::raw("select * from video where id = '$vid' "));

       if(!empty($videos)){
      $video_data[$i][0] = $videos[0]->id;
      $video_data[$i][1] = $videos[0]->name;
      }
       $i++;
       }
      }

      $story = array();
      if(!empty($story_items)){
        $i=0;
      foreach($story_items as $story_items){

      $sid = $story_items;
  		$story  = DB::select("select * from story where id = '$sid'");

      if(!empty($story)){
       $story_data[$i][0] = $story[0]->id;
       $story_data[$i][1] = $story[0]->name;
     }
       $i++;

        }
    }


      $audio = array();

      if(!empty($audio_items)){
      $i=0;
      foreach($audio_items as $audio_items){

      $aud = $audio_items;
      $audio = DB::select(DB::raw("select * from audio where id = '$aud' "));

       if(!empty($audio)){
      $audio_data[$i][0] = $audio[0]->id;
      $audio_data[$i][1] = $audio[0]->name;
      }
       $i++;
       }
      }


      $quiz = array();

      if(!empty($quiz_items)){
      $i=0;
      foreach($quiz_items as $quiz_items){

      $q = $quiz_items;
      $quiz = DB::select(DB::raw(" select * from exam_question where exam_id = '$q' group by exam_id"));

       if(!empty($quiz)){
      $quiz_data[$i][0] = $quiz[0]->exam_id;
      
      }
       $i++;
       }
      }



   		 return view('parent.schedule.schedule')
       ->with('video_count',$video_count)
       ->with('story_count',$story_count)
       ->with('audio_count',$audio_count)
       ->with('quiz_count' , $quiz_count)
   		 ->with('video_data',$video_data)
       ->with('story_data',$story_data)
       ->with("audio_data",$audio_data)
       ->with('quiz_data' ,$quiz_data);

    }



    /*
   * @author : A.H.A.T.Dias
   * @desc : Delete selected item from the video queue
   * @created : 22/02/2016
   */

    public function deleteColV(){

      $id = $_REQUEST['id'];

      $vedio_items = array();
      $vedio_items = $_SESSION['video_que'];
     

     if (($key=array_search($id, $vedio_items)) !== false) {
          unset($vedio_items[$key]);
          
      }

     $_SESSION['video_que'] = $vedio_items;

     echo 1;
    }


     /*
   * @author : A.H.A.T.Dias
   * @desc :  Delete selected item from the story queue
   * @created : 22/02/2016
   */
    public function deleteColS(){

      $id = $_REQUEST['id'];

      $story_items = array();
      $story_items = $_SESSION['story_que'];
     

     if (($key=array_search($id, $story_items)) !== false) {
          unset($story_items[$key]);
          
      }

     $_SESSION['story_que'] = $story_items;

      echo 1;
    }

      /*
   * @author : A.H.A.T.Dias
   * @desc :  Delete selected item from the story queue
   * @created : 22/02/2016
   */
    public function deleteColAudio(){

      $id = $_REQUEST['id'];

      $audio_items = array();
      $audio_items = $_SESSION['audio_que'];
     

     if (($key=array_search($id, $audio_items)) !== false) {
          unset($audio_items[$key]);
          
      }

     $_SESSION['audio_que'] = $audio_items;

      echo 1;
    }

       /*
   * @author : A.H.A.T.Dias
   * @desc :  Delete selected item from the Quiz queue
   * @created : 1/05/2016
   */

  public function deleteColQuiz(){

      $id = $_REQUEST['id'];

      $quiz_items = array();
      $quiz_items = $_SESSION['quiz_que'];
     

     if (($key=array_search($id, $quiz_items)) !== false) {
          unset($quiz_items[$key]);
          
      }

     $_SESSION['quiz_que'] = $quiz_items;

      echo 1;



   }

     /*
   * @author : A.H.A.T.Dias
   * @desc :  Redirect to the make schedule page with child account details and already crated schedule dates
   * @created : 22/02/2016
   */
    public function makeSchedule(){

      $id = $_SESSION['USERID'];
      $dates = array();

      $kid_accounts = DB::select("
  select 
       u.id as c_id,
       u.firstname as f_name,
       u.lastname as l_name,
       u.dateOfBirth as date_of_birth,
       u.Age as age,
       u.user_type as user_type,
       u.acc_created as created_date,
       u.img_path as img_path,
       u.password as kid_password,
       u.status as status,
       u.gender as gender
       

      ,c.parent_id as parent_id,
      c.nick_name as nik_name,
      c.bio as bio_data

 from user u,child c where u.id in (select id from child where parent_id = '$id') and c.id in (select id from child where parent_id = '$id') and u.id = c.id");

      $schedule_dates = DB::select("select dueTime from shedule where fk_parent_id='$id'");

      foreach ($schedule_dates as  $date) {
        
          $temp = explode(",", $date->dueTime);

          foreach ($temp as $value) {
                array_push($dates, $value);
          }

      }

       return view('parent.schedule.schedule_allocator')
              ->with('kids',$kid_accounts)
              ->with('dates',$dates);

    }


   /*
   * @author : A.H.A.T.Dias
   * @desc :  Send dates according to the schedules date created to this account 
   * @created : 22/02/2016
   */

    public function getDate(){

       $id = $_SESSION['USERID'];
       $dats = array();
       $dats = $_REQUEST['cids'];
       $stop_dates = array();

       foreach($dats as $d){

       $schedule_dates = DB::select("select dueTime from shedule where fk_parent_id='$id' and fk_child_id='$d' group by dueTime");

      
        foreach($schedule_dates  as $x){
       array_push($stop_dates, $x->dueTime);
           }
        }
      

        unset($_SESSION['S_DATES']);
        $_SESSION['S_DATES'] = $stop_dates ;


        return $stop_dates;
         

    }


    /*
   * @author : A.H.A.T.Dias
   * @desc : Check wether the selected items match with the childs age category
   * @created : 22/02/2016
   */

    public function setSchedule(){

       $u_id   = $_SESSION['USERID'];
       $c_id   = $_REQUEST['id'];
       $date   = $_REQUEST['date'];
       $age    = $_REQUEST['age'];

       $message_status = "";
       $v_warning = array();
       $s_warning = array();
       $a_warning = array();
       $age_range = array();


      foreach($age as $age){

       if($age>0 && $age<=2){
          array_push( $age_range,1);
       }
       if($age>2 && $age<=4){
          array_push( $age_range,2);
       }
       if($age>4 && $age<=6){
         array_push( $age_range,3);
       }
         if($age>6 && $age<=10){
          array_push( $age_range,4);
       }


     }

       $split_dates = explode(",", trim($date));

      $vedio_items = array();
      $vedio_items = $_SESSION['video_que'];
     // array_push($vedio_items, 1);
      $story_items = array();
      $story_items = $_SESSION['story_que'];
      //array_push($story_items, 2);
      $audio_items = array();
      $audio_items = $_SESSION['audio_que'];

      $video_data = array(array(),array());
      $story_data = array(array(),array());
      $audio_data = array(array(),array());


      $video_count = sizeof($vedio_items);
      $story_count = sizeof($story_items);
      $audio_count = sizeof($audio_items);

     for($i=0;$i<sizeof($c_id);$i++){

      foreach($vedio_items as $v){
        $getage = $age_range[$i];
        $data = DB::select("select * from video where id='$v' and agegroupid = '$getage' ");

          if(empty($data)){
            $cid = $c_id[$i];
            $video = DB::select("select * from video where id='$v' ");


            $child = DB::select("
    select 
       u.id as c_id,
       u.firstname as f_name,
       u.lastname as l_name,
       u.dateOfBirth as date_of_birth,
       u.Age as age,
       u.user_type as user_type,
       u.acc_created as created_date,
       u.img_path as img_path,
       u.password as kid_password,
       u.status as status,
       u.gender as gender
       

      ,c.parent_id as parent_id,
      c.nick_name as nik_name,
      c.bio as bio_data

     from user u,child c where u.id = '$cid' and c.id = '$cid'");


            $name = "<b>Name :</b>".$child[0]->f_name." ".$child[0]->l_name."<b>  Video Name:</b> ".$video[0]->name."<br/>";
            array_push($v_warning, $name);

          }

      }

      foreach($story_items as $s){
        $getage = $age_range[$i];
        $data = DB::select("select * from story where id='$s' and agegroupid = '$getage' ");

          if(empty($data)){
            $cid = $c_id[$i];
            $story = DB::select("select * from story where id='$s' ");


             $child = DB::select("
    select 
       u.id as c_id,
       u.firstname as f_name,
       u.lastname as l_name,
       u.dateOfBirth as date_of_birth,
       u.Age as age,
       u.user_type as user_type,
       u.acc_created as created_date,
       u.img_path as img_path,
       u.password as kid_password,
       u.status as status,
       u.gender as gender
       

      ,c.parent_id as parent_id,
      c.nick_name as nik_name,
      c.bio as bio_data

 from user u,child c where u.id = '$cid' and c.id = '$cid'");


            $name = "<b>Name :</b>".$child[0]->f_name." ".$child[0]->l_name."<b>  Story Name:</b> ".$story[0]->name."<br/>";
            array_push($s_warning, $name);

          }



       }








    foreach($audio_items as $a){
        $getage = $age_range[$i];
        $data = DB::select("select * from audio where id='$a' and agegroupid = '$getage' ");

          if(empty($data)){
            $cid = $c_id[$i];
            $audio = DB::select("select * from audio where id='$a' ");


             $child = DB::select("
    select 
       u.id as c_id,
       u.firstname as f_name,
       u.lastname as l_name,
       u.dateOfBirth as date_of_birth,
       u.Age as age,
       u.user_type as user_type,
       u.acc_created as created_date,
       u.img_path as img_path,
       u.password as kid_password,
       u.status as status,
       u.gender as gender
       

      ,c.parent_id as parent_id,
      c.nick_name as nik_name,
      c.bio as bio_data

 from user u,child c where u.id = '$cid' and c.id = '$cid'");


            $name = "<b>Name :</b>".$child[0]->f_name." ".$child[0]->l_name."<b>  Audio Name:</b> ".$audio[0]->name."<br/>";
            array_push($a_warning, $name);

          }



       }





     }
    
        return response()->json(['v_warning' =>  $v_warning ,'s_warning'=> $s_warning,'a_warning'=>$a_warning]);
    
    }



    /*
   * @author : A.H.A.T.Dias
   * @desc : make schedule with user selected items
   * @created : 22/02/2016
   */

      public function submitShedule(){

      
       $c_id   = $_REQUEST['id'];
       $date   = $_REQUEST['date'];



      $vedio_items = array();
      $vedio_items = $_SESSION['video_que'];

      $story_items = array();
      $story_items = $_SESSION['story_que'];

      $audio_items = array();
      $audio_items = $_SESSION['audio_que'];

      $quiz_items  = array();
      $quiz_items  = $_SESSION['quiz_que'];

      $video_count = sizeof($vedio_items);
      $story_count = sizeof($story_items);
      $audio_count = sizeof($audio_items);
      $quiz_count  = sizeof($quiz_items);


      if($video_count ==0 && $story_count == 0 && $audio_count == 0 && $quiz_count == 0){

        return 0;

      }else{

       $subject   = new Subject();

       $video  = new Video($date,$c_id);
       $song   = new Songs($date,$c_id);
       $audio  = new Audio($date,$c_id);
       $quiz   = new Quiz($date,$c_id);

     if($video_count != 0 ){

       $subject->add($video);
     }
     if($story_count != 0 ){

       $subject->add($song);
     }
     if($audio_count != 0 ){

       $subject->add($audio);
     }
     if($quiz_count != 0 ){

       $subject->add($quiz);
     }
       $subject->notify();

       return 1;
     }


    }


   /*
   * @author : A.H.A.T.Dias
   * @desc : Redirect to the calender view
   * @created : 22/02/2016
   */

    public function pastSchedule(){

        return view('parent.schedule.create_paste_schedules');
    }

    
    /*
   * @author : A.H.A.T.Dias
   * @desc :  Send data to the calender and load it
   * @created : 22/02/2016
   */
    public function calanderProcess(){

      $id = $_SESSION['USERID'];
      $dates = array();

      $child_id = DB::select(" select 
       u.id as c_id,
       u.firstname as f_name,
       u.lastname as l_name,
       u.dateOfBirth as date_of_birth,
       u.Age as age,
       u.user_type as user_type,
       u.acc_created as created_date,
       u.img_path as img_path,
       u.password as kid_password,
       u.status as status,
       u.gender as gender
       

      ,c.parent_id as parent_id,
      c.nick_name as nik_name,
      c.bio as bio_data

     from user u,child c where u.id in (select id from child where parent_id = '$id') and c.id in (select id from child where parent_id = '$id') and u.id = c.id");


      foreach($child_id as $cid){
        $l = $cid->c_id;
        $schedule_dates = DB::select("select * from shedule where fk_parent_id='$id'  ");

      $i=0;
      $events = array();
      foreach($schedule_dates as $s)
       {
        $e = array();
        $e['id'] = $s->id."".$i;
        $e['title'] = $cid->f_name."".$cid->l_name;
        $e['start'] = $s->dueTime;
        $e['url'] = "edit_clander_data?pid=".$s->fk_parent_id."&date=".$s->dueTime;
        $i++;

        array_push($events, $e);
       }
    }
     echo json_encode($events);

    }


    /*
   * @author : A.H.A.T.Dias
   * @desc :  Get selected calander date and load items detalis and send it to the view page
   * @created : 22/02/2016
   */
    public function editClanderData(){

      $date = $_REQUEST['date'];
      $pid  = $_REQUEST['pid'];


      $vedio_items = array();
      $story_items = array();
      $audio_items = array();
      $quiz_items  = array();
    


      $vids = DB::select("select video_id from video_shedule where shedule_id in (select id from shedule where fk_parent_id = '$pid' and dueTime = '$date') group by video_id");
      $sids = DB::select("select story_id from story_schedule where schedule_id in (select id from shedule where fk_parent_id = '$pid' and dueTime = '$date') group by story_id");
      $aids = DB::select("select audio_id from audio_shedule where shedule_id in (select id from shedule where fk_parent_id = '$pid' and dueTime = '$date') group by audio_id");
      $qids = DB::select("select exam_id from exam_schedule where schedule_id in (select id from shedule where fk_parent_id = '$pid' and dueTime = '$date') group by exam_id");


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


          $_SESSION['c_story_que'] = $story_items ;

          $_SESSION['c_video_que'] = $vedio_items ;

          $_SESSION['c_audio_que'] = $audio_items ;

          $_SESSION['c_quiz_que']  = $quiz_items ;

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


          
         return view('parent.schedule.calender.view_selected_content')
                ->with('content_v',$content_v)
                ->with('content_s',$content_s)
                ->with('content_a',$content_a)
                ->with('content_q',$content_q)
                ->with('selected_date',$date);


    }


     /*
   * @author : A.H.A.T.Dias
   * @desc :  Destory existing session and set new items array to the session varialbe
   * @created : 22/02/2016
   */
    public function setPastContentAsNew(){


          $new_story_items=array();
          $new_video_items=array();
          $new_story_items =  $_SESSION['c_story_que'];
          $new_video_items =  $_SESSION['c_video_que'];


          unset($_SESSION['video_que']);
          unset($_SESSION['story_que']);
          $_SESSION['video_que'] = $new_video_items;
          $_SESSION['story_que'] = $new_story_items;


          return redirect()->action('scheduleController@makeSchedule');
        

    }



    /*
   * @author : A.H.A.T.Dias
   * @desc :  Delete schedule from date 
   * @created : 22/02/2016
   */
    public function deleteSchedule(){

          $date = $_REQUEST['date'];
          $id   = $_SESSION['USERID'];

          $ids = DB::select("select id from shedule where dueTime = '$date' and fk_parent_id = '$id'  and content_id = '1' ");

          foreach($ids as $d){
              $key = $d->id;

            DB::statement( "delete from video_shedule where shedule_id ='$key'");
        }  


      $idss = DB::select("select id from shedule where dueTime = '$date' and fk_parent_id = '$id'  and content_id = '3' ");
        foreach($idss as $d){
              $key = $d->id;
        DB::statement( "delete from story_schedule where schedule_id = '$key'");  

      }

       $idss = DB::select("select id from shedule where dueTime = '$date' and fk_parent_id = '$id'  and content_id = '2' ");
        foreach($idss as $d){
              $key = $d->id;
        DB::statement( "delete from audio_shedule where shedule_id = '$key'");  

      }


      $idss = DB::select("select id from shedule where dueTime = '$date' and fk_parent_id = '$id'  and content_id = '4' ");
        foreach($idss as $d){
              $key = $d->id;
        DB::statement( "delete from exam_schedule where schedule_id = '$key'");  

      }


          DB::table('shedule')->where('dueTime', '=', $date)->where('fk_parent_id','=',$id)->delete();
          
         return 1;

    }

}
