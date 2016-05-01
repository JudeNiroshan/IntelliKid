<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class ParentVideosContoller extends Controller
{

	 
    
 public function viewAllVideos(){

	$video_records = DB::select("select * from video");
    return view('parent.videos.all_videos')->with('videos',$video_records );

 }
 public function viewVideo(Request $request){

	$id = $request->input('id');
	$status="no";

	$vedio_items = array();
	$vedio_items = $_SESSION['video_que'];

	foreach($vedio_items as $item){

			if($item == $id){
				$status = "yes";
			}
	}


	$cat = $request->input('cat');
	$pid = $_SESSION['USERID'];

	$video_record = DB::select("select * from video a where a.id='$id' ");
	$video_records = DB::select("select * from video a where a.agegroupid = '$cat'");
	//$check = DB::select("select * from collector a where a.pid = '$pid' and a.item_id = '$id' and type='video' ");

	$comments  = DB::select("select a.text,a.comment_date,k.lastname as l_name,k.firstname as f_name,k.img_path 
from comment a,user k 
where a.parent_id = k.id and a.item_id = '$id' and a.type_id = 1");
	
		if($status == "yes"){

			$msg = "has";
		}
		else{

			$msg = "no";
		}



	return view('parent.videos.view_videos')->with('selected_video',$video_record )->with('all_videos',$video_records)->with('msg',$msg)->with('comment',$comments);;

    }

  public function viewVideoCat(Request $request){

	$id = $request->input('id');
	$cat = $request->input('cat');

	$video_records = DB::select("select * from video a where a.agegroupid = '$cat' ");
	return view('parent.videos.view_all_cat_videos')->with('videos',$video_records )->with('cat',$cat);



  }

  public function addToCollectorVideo(Request $request){

		$id = $request->input('id');

		$vedio_items = array();
		$vedio_items = $_SESSION['video_que'];

		array_push($vedio_items, $id);
		$_SESSION['video_que'] = $vedio_items;
		
		echo 1;
	


	}

	public function deleteFromCollectorVideo(Request $request){

		$id = $request->input('id');
		
		$vedio_items = array();
		$vedio_items = $_SESSION['video_que'];
		

		if (($key=array_search($id, $vedio_items)) !== false) {
    			unset($vedio_items[$key]);

			}
		$_SESSION['video_que'] = $vedio_items;

		echo 1;

	}

	public function search(){


   
 		$key = $_REQUEST['search'];
 
		$data  = DB::select("select * from video where name like '%$key%'");

  		return view('parent.videos.all_videos')->with('videos',$data );

	}
	public function searchCatVideos(){
		
		$cat = $_REQUEST['cat'];
		$key = $_REQUEST['search'];
 
		$data  = DB::select("select * from video where name like '%$key%' and agegroupid = '$cat'");

  		return view('parent.videos.view_all_cat_videos')->with('videos',$data )->with('cat',$cat);

	}



}
