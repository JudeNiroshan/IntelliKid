<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class ParentStoryContoller extends Controller
{
    

    /*
	*Display all stories in view_all_storeis page
    */

	public function all_stories_display(){

		$stories  = DB::select("select * from story1 a group by a.st_id ");
		return view('parent.story.view_all_stories')->with('stories',$stories);

	}
public function view_story_cat(Request $request){

	$id = $request->input('id');
	$cat = $request->input('cat');


	//$video_records = DB::select("select * from video a where a.agegroupid = '$cat' ");
	//return view('parent.story.view_all_stories')->with('videos',$video_records );
	//$stories  = DB::select("select * from story a group by a.st_id ");
	$stories  = DB::select("select a.*,k.name from story k,story_image a where a.storyid = k.id and k.agegroupid = '$cat' group by storyid ");
		return view('parent.story.view_all_stories')->with('stories',$stories)->with('cat',$cat);



}



    /*
	*Display selected story in show_story page
    */


	public function show_story(Request $request){

		$id 	   = $request->input('id');
		$pid       = $_SESSION['USERID'];
		$status="no";

		$story_items = array();
		$story_items = $_SESSION['story_que'];

		foreach($story_items as $item){
			if($item == $id){
				$status = "yes";
			}
		}

		$story     = DB::select("select * from story_image a where a.storyid = '$id' ");
		$comments  = DB::select("select a.text,a.date,k.l_name,k.f_name,k.img_path from comment12 a,parent_registration k where a.pid = k.user_id and a.item_id = '$id' and a.type = 'story'");
		//$check     = DB::select("select * from collector a where a.pid = '$pid' and a.item_id = '$id' and type='story' ");


		if($status == "yes"){

			$msg = "has";
		}
		else{

			$msg = "no";
		}



 		return view('parent.story.show_story')->with('story',$story)->with('msg',$msg)->with('comment',$comments);

	}






	public function add_to_collector(Request $request){

      	$id   = $request->input('id');


      	$story_items = array();
		$story_items = $_SESSION['story_que'];

		array_push($story_items, $id);
		$_SESSION['story_que'] = $story_items;

		echo 1;


		//$type = $request->input('type');
		//$pid  = $_SESSION['USERID'];

		/*$check = DB::select("select * from collector a where a.pid='$pid' and a.item_id='$id' and a.type='$type' " );

		 if(empty($check)){

		 	DB::statement(DB::raw("INSERT INTO  collector(pid,item_id,type)   values ('$pid','$id','$type') "));  
		 echo 1;
		}
		else{
			echo 0;
		}*/

	}




	public function delete_from_collector(Request $request){

		$id = $request->input('id');
		
		$story_items = array();
		$story_items = $_SESSION['story_que'];
		

		if (($key=array_search($id, $story_items)) !== false) {
    			unset($story_items[$key]);

			}
		$_SESSION['story_que'] = $story_items;

		
		 /*$pid = $_SESSION['USERID'];
		 
		//$tt = DB::table('collector')->where('pid','=', $pid)->where('item_id','=','$id')->where('type','=','story')->delete();
		DB::statement(DB::raw(
                       "DELETE FROM  collector where pid = '$pid' and item_id = '$id' and type='story'"));  
		
		*/
		echo 1;

	}

	public function search_story(){

   			$cat = $_REQUEST['cat'];
 			$key = $_REQUEST['search'];
 
			$data  = DB::select("select a.*,k.name from story k,story_image a where a.storyid = k.id and k.agegroupid = '$cat' and k.name like '%$key%' group by storyid");

 			 return view('parent.story.view_all_stories')->with('stories',$data )->with('cat',$cat);
	}

	public function serach_all_videos(){


			$data  = DB::select("select a.*,k.name from story k,story_image a where a.storyid = k.id group by storyid");

 			 return view('parent.story.search_all_story')->with('stories',$data );

	}
	public function search_all_story_box(){
			$key = $_REQUEST['search'];

			$data  = DB::select("select a.*,k.name from story k,story_image a where a.storyid = k.id and k.name like '%$key%' group by storyid");

 			  return view('parent.story.search_all_story')->with('stories',$data );

	}

}
