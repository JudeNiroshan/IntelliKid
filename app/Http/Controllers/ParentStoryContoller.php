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



    /*
	*Display selected story in show_story page
    */


	public function show_story(Request $request){

		$id 	   = $request->input('id');
		$pid       = $_SESSION['USERID'];

		$story     = DB::select("select * from story1 a where a.st_id= '$id' ");
		$comments  = DB::select("select a.text,a.date,k.l_name,k.f_name,k.img_path from comment12 a,parent_registration k where a.pid = k.user_id and a.item_id = '$id' and a.type = 'story'");
		$check     = DB::select("select * from collector a where a.pid = '$pid' and a.item_id = '$id' and type='story' ");


		if(!empty($check)){

			$msg = "has";
		}
		else{

			$msg = "no";
		}

 		return view('parent.story.show_story')->with('story',$story)->with('msg',$msg)->with('comment',$comments);

	}






	public function add_to_collector(Request $request){

      	$id   = $request->input('id');
		$type = $request->input('type');
		$pid  = $_SESSION['USERID'];

		$check = DB::select("select * from collector a where a.pid='$pid' and a.item_id='$id' and a.type='$type' " );

		 if(empty($check)){

		 	DB::statement(DB::raw("INSERT INTO  collector(pid,item_id,type)   values ('$pid','$id','$type') "));  
		 echo 1;
		}
		else{
			echo 0;
		}

	}




	public function delete_from_collector(Request $request){

		$id = $request->input('id');
		
		
		 $pid = $_SESSION['USERID'];
		 
		//$tt = DB::table('collector')->where('pid','=', $pid)->where('item_id','=','$id')->where('type','=','story')->delete();
		DB::statement(DB::raw(
                       "DELETE FROM  collector where pid = '$pid' and item_id = '$id' and type='story'"));  
		
		
		echo 1;

	}

}
