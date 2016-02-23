<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class scheduleController extends Controller
{
    public function ViewAllSelectedItems(){

  		$id = $_SESSION['USERID'];
    
  		$video_count = DB::select("select count(item_id) as vcount from collector where type='video' and pid = '$id'");
  		$story_count = DB::select("select count(item_id) as scount from collector where type='story' and pid = '$id'");

  		$videos = DB::select("select * from videos where  id in (select item_id from collector where type='video' and pid = '$id') ");
  		$story  = DB::select("select * from story1 where st_id in (select item_id from collector where type='story' and pid = '$id') group by st_id");

   		 return view('parent..schedule.schedule')->with('video_count',$video_count)->with('story_count',$story_count)
   				 ->with('videos',$videos)->with('story',$story);




    }
}
