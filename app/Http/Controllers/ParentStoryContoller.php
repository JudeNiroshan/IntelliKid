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

	public function allStoriesDisplay(){

		$stories  = DB::select("select * from story a group by a.st_id ");

		var_dump($stories);

		return view('parent.story.view_all_stories')->with('stories',$stories);

	}
    public function viewStoryCat(Request $request){

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


	public function showStory(Request $request){

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

		$story   = DB::select("select * from story_image a where a.storyid = '$id' ");
		$details = DB::select("select * from story a where a.id = '$id' ");


	$comments  = DB::select("select a.text,a.comment_date,k.lastname as l_name,k.firstname as f_name,k.img_path 
from comment a,user k 
where a.parent_id = k.id and a.item_id = '$id' and a.type_id = 3");
		//$check     = DB::select("select * from collector a where a.pid = '$pid' and a.item_id = '$id' and type='story' ");


		if($status == "yes"){

			$msg = "has";
		}
		else{

			$msg = "no";
		}


 		return view('parent.story.show_story')->with('story',$story)->with('msg',$msg)->with('comment',$comments)->with('likes',$details);;
 
	 }






	public function addToCollector(Request $request){

      	$id   = $request->input('id');


      	$story_items = array();
		$story_items = $_SESSION['story_que'];

		array_push($story_items, $id);
		$_SESSION['story_que'] = $story_items;

		echo 1;



	}




	public function deleteFromCollector(Request $request){

		$id = $request->input('id');
		
		$story_items = array();
		$story_items = $_SESSION['story_que'];
		

		if (($key=array_search($id, $story_items)) !== false) {
    			unset($story_items[$key]);

			}
		$_SESSION['story_que'] = $story_items;

		
	
		echo 1;

	}

	public function searchStory(){

   			$cat = $_REQUEST['cat'];
 			$key = $_REQUEST['search'];
 
			$data  = DB::select("select a.*,k.name from story k,story_image a where a.storyid = k.id and k.agegroupid = '$cat' and k.name like '%$key%' group by storyid");

 			 return view('parent.story.view_all_stories')->with('stories',$data )->with('cat',$cat);
	}

	public function serachAllVideos(){


			$data  = DB::select("select a.*,k.name from story k,story_image a where a.storyid = k.id group by storyid");

 			 return view('parent.story.search_all_story')->with('stories',$data );

	}
	public function searchAllStoryBox(){
			$key = $_REQUEST['search'];

			$data  = DB::select("select a.*,k.name from story k,story_image a where a.storyid = k.id and k.name like '%$key%' group by storyid");

 			  return view('parent.story.search_all_story')->with('stories',$data );

	}

}
