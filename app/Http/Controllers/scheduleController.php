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
      $kid_accounts = DB::select("select * from child_accounts where parent_id='$id' ");

       return view('parent.schedule.schedule_allocator')->with('kids',$kid_accounts);

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

      $story_items = array();
      $story_items = $_SESSION['story_que'];


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

       $subject   = new Subject();

       $video  = new Video($date,$c_id);
       $song   = new Songs($date,$c_id);

       $subject->add($video);
       $subject->add($song);
       $subject->notify();

       return 1;

     
    


      


    }


}
