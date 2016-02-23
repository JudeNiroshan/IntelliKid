<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class ParentVideosContoller extends Controller
{
    
public function view_all_videos(){

	$video_records = DB::select("select * from videos");
    return view('parent.videos.all_videos')->with('videos',$video_records );

}
public function view_video(Request $request){

	$id = $request->input('id');
	$cat = $request->input('cat');
	 $pid = $_SESSION['USERID'];
	$video_record = DB::select("select * from videos a where a.id='$id' ");
	$video_records = DB::select("select * from videos a where a.cat = '$cat'");
	$check = DB::select("select * from collector a where a.pid = '$pid' and a.item_id = '$id' and type='video' ");

	$comments  = DB::select("select a.text,a.date,k.l_name,k.f_name,k.img_path from comment12 a,parent_registration k where a.pid = k.user_id and a.item_id = '$id' and a.type = 'video'");
	//var_dump($comments);
		if(!empty($check)){

			$msg = "has";
		}
		else{

			$msg = "no";
		}

		

	return view('parent.videos.view_videos')->with('selected_video',$video_record )->with('all_videos',$video_records)->with('msg',$msg)->with('comment',$comments);;

}

public function view_video_cat(Request $request){

	$id = $request->input('id');
	$cat = $request->input('cat');

	$video_records = DB::select("select * from videos a where a.title like '%$id%' ");
	return view('parent.videos.all_videos')->with('videos',$video_records );



}


public function add_to_collector_video(Request $request){

		$id = $request->input('id');
		
		
		 $pid = $_SESSION['USERID'];
		 $check = DB::select("select * from collector a where a.pid='$pid' and a.item_id='$id' and a.type='video' " );


		 if(empty($check)){
		 DB::statement(DB::raw(
                       "INSERT INTO  collector(pid,item_id,type)   values ('$pid','$id','video') "));  
		 echo 1;
		}
		else{
			echo 0;
		}
			 	 
	



	}

	public function delete_from_collector_video(Request $request){

		$id = $request->input('id');
		
		
		 $pid = $_SESSION['USERID'];
		 
	
		DB::statement(DB::raw(
                       "DELETE FROM  collector where pid = '$pid' and item_id = '$id' and type='video'"));  
		
		
		echo 1;

	}

public function search(){


   
 $key = $_REQUEST['search'];
 
$data  = DB::select("select * from videos where title like '%$key%'");

  return view('parent.videos.all_videos')->with('videos',$data );

}



}
