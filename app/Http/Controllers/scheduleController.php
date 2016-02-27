<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\observer\Subject;
use App\observer\Video;
use App\observer\Songs;
use App\observer\Slton;

class scheduleController extends Controller
{
    public function ViewAllSelectedItems(){

  		$id = $_SESSION['USERID'];


  		$vedio_items = array();
	    $vedio_items = $_SESSION['video_que'];

	    $story_items = array();
	    $story_items = $_SESSION['story_que'];


      $video_data = array(array(),array());
      $story_data = array(array(),array());


  		$video_count = sizeof($vedio_items);
  		$story_count = sizeof($story_items);
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
   		 return view('parent.schedule.schedule')->with('video_count',$video_count)->with('story_count',$story_count)
   				 ->with('video_data',$video_data)->with('story_data',$story_data);



    }


    public function delete_col_v(){

      $id = $_REQUEST['id'];

      $vedio_items = array();
      $vedio_items = $_SESSION['video_que'];
     

    if (($key=array_search($id, $vedio_items)) !== false) {
          unset($vedio_items[$key]);
          
      }

     $_SESSION['video_que'] = $vedio_items;

   echo 1;
    }


    public function delete_col_s(){

      $id = $_REQUEST['id'];

      $story_items = array();
      $story_items = $_SESSION['story_que'];
     

    if (($key=array_search($id, $story_items)) !== false) {
          unset($story_items[$key]);
          
      }

     $_SESSION['story_que'] = $story_items;

   echo 1;
    }


    public function make_schedule(){






      $id = $_SESSION['USERID'];
      $dates = array();
      $kid_accounts = DB::select("select * from child_accounts where parent_id='$id' ");

      $schedule_dates = DB::select("select dueTime from shedule where fk_parent_id='$id'");

      foreach ($schedule_dates as  $date) {
        
          $temp = explode(",", $date->dueTime);

          foreach ($temp as $value) {
                array_push($dates, $value);
          }

      }


       return view('parent.schedule.schedule_allocator')->with('kids',$kid_accounts)->with('dates',$dates);



    }

    public function set_schedule(){

       $u_id = $_SESSION['USERID'];
       $c_id   = $_REQUEST['id'];
       $date = $_REQUEST['date'];
       $age = $_REQUEST['age'];

       $message_status = "";
       $v_warning = array();
       $s_warning = array();
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

      $video_data = array(array(),array());
      $story_data = array(array(),array());


      $video_count = sizeof($vedio_items);
      $story_count = sizeof($story_items);

     for($i=0;$i<sizeof($c_id);$i++){

      foreach($vedio_items as $v){
        $getage = $age_range[$i];
        $data = DB::select("select * from video where id='$v' and agegroupid = '$getage' ");

          if(empty($data)){
            $cid = $c_id[$i];
            $video = DB::select("select * from video where id='$v' ");
            $child = DB::select("select f_name,l_name from child_accounts where c_id  = '$cid'");
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
            $child = DB::select("select f_name,l_name from child_accounts where c_id  = '$cid'");
            $name = "<b>Name :</b>".$child[0]->f_name." ".$child[0]->l_name."<b>  Story Name:</b> ".$story[0]->name."<br/>";
            array_push($s_warning, $name);

          }



      }
    }
    


        return response()->json(['v_warning' =>  $v_warning ,'s_warning'=> $s_warning]);
    

    }


      public function submit_shedule(){

      
       $c_id   = $_REQUEST['id'];
       $date   = $_REQUEST['date'];



      $vedio_items = array();
      $vedio_items = $_SESSION['video_que'];

      $story_items = array();
      $story_items = $_SESSION['story_que'];

      $video_count = sizeof($vedio_items);
      $story_count = sizeof($story_items);


      if($video_count ==0 && $story_count == 0){

        return 0;

      }else{

       $subject   = new Subject();

       $video  = new Video($date,$c_id);
       $song   = new Songs($date,$c_id);

       if($video_count != 0 ){
       $subject->add($video);
     }
     if($story_count != 0 ){
       $subject->add($song);
     }
       $subject->notify();

       return 1;
     }


    }
    public function past_schedule(){

        return view('parent.schedule.create_paste_schedules');

    }

    public function delete_schedule(){


    }

    public function calander_process(){

      $id = $_SESSION['USERID'];
      $dates = array();

      $schedule_dates = DB::select("select * from shedule where fk_parent_id='$id' group by dueTime ");


  $events = array();
foreach($schedule_dates as $s)
  {
  $e = array();
    $e['id'] = $s->id;
    $e['title'] = 'Schedule';
    $e['start'] = $s->dueTime;
     $e['url'] = "edit_clander_data?pid=".$s->fk_parent_id."&date=".$s->dueTime;



    array_push($events, $e);
  }
  echo json_encode($events);

    }

    public function edit_clander_data(){



      $date = $_REQUEST['date'];
      $pid  = $_REQUEST['pid'];


       $vedio_items = array();
      //$_SESSION['video_que']=$vedio_items;

     $story_items = array();
      //$_SESSION['story_que']=$story_items;


      $vids = DB::select("select fk_video_id from video_shedule where fk_shedule_id in (select id from shedule where fk_parent_id = '$pid' and dueTime = '$date') group by fk_video_id");
      $sids = DB::select("select fk_story_id from story_schedule where fk_schedule_id in (select id from shedule where fk_parent_id = '$pid' and dueTime = '$date') group by fk_story_id;");
         foreach ($vids as $v) {

            array_push($vedio_items, $v->fk_video_id);
          }
           foreach ($sids as $s) {
            array_push($story_items, $s->fk_story_id);
          }


           $_SESSION['c_story_que']= $story_items ;

          $_SESSION['c_video_que'] = $vedio_items ;

          $content_v = array();
          $content_s = array();

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



          
         return view('parent.schedule.calender.view_selected_content')->with('content_v',$content_v)->with('content_s',$content_s);


    }


    public function set_past_content_as_new(){


          $new_story_items=array();
          $new_video_items=array();
          $new_story_items =  $_SESSION['c_story_que'];
          $new_video_items =  $_SESSION['c_video_que'];


          unset($_SESSION['video_que']);
          unset($_SESSION['story_que']);
          $_SESSION['video_que'] = $new_video_items;
          $_SESSION['story_que'] = $new_story_items;


          return redirect()->action('scheduleController@make_schedule');




    }

}
