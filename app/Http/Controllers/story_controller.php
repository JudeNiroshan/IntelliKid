<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class story_controller extends Controller{

/**
*	@author: Nibras
*	@param: none
*
*	desc: fetch data from story_shedule,story,story_image  and shedule table and dislpay detailed story list in page, if there arn't any
*		 data, redirect to error page
*
*	created : 15/02/2016
*/

	public function loadStoryPage(){

	//	$_SESSION['id']=104;    //from session variable.

		$child_results = DB::table('user')->join('child','user.id','=','child.id')
										  ->where('user.id','=',$_SESSION['child_id'])->first();   //child details

		$read = 1;
		$not_read = 0;

		$story_details = DB::select("select si.path, st.totalviews, st.likes, st.id as story_id, st.name
		 				from shedule sh, story_schedule ss, story st, story_image si 
		 				where sh.fk_child_id = ".$_SESSION['child_id']." and sh.id = ss.schedule_id and 
		 				st.id = ss.story_id and st.id = si.storyid and ss.read_status = ".$not_read);          //add where date condition


		if(isset($story_details[0])!=null){

			return view('kids_views.story')->with('title','Story')
									   ->with('child',$child_results)
									   ->with('story_details',$story_details);

		}

		else{

			return view('kids_views.errorPage')->with('title','Story')
										->with('child',$child_results);
		}

	}

/**
*	@author: Nibras
*	@param: none
*
*	desc: display story in a page and increment the read count and update seen status, date and increment the points
*
*	created : 15/02/2016
*/

	public function readStory(Request $request){


		$story_id = $request->input('story_id');    //story id

		$child_results = DB::table('user')->join('child','user.id','=','child.id')
										  ->where('user.id','=',$_SESSION['child_id'])->first();   //child details


		$story_details = DB::table('story')->join('story_schedule','story.id','=','story_schedule.story_id')
										   ->where('story.id','=',$story_id)	 
										   ->get();

		$story_image = DB::table('story_image')->where('storyid','=',$story_id)->get();

		$story_schedule_id = $story_details[0]->schedule_id;
		$story_path = $story_details[0]->path;
		$story_name = $story_details[0]->name;
		$read_status = $story_details[0]->read_status;
		$total_views = $story_details[0]->totalviews;
		$story_img_path = $story_image[0]->path;

		$total_views++;	


		DB::table('story')->where('id',$story_id)->update(['totalviews'=>$total_views]);   //update total views 


		if($read_status == 0)
		{

		   DB::table('story_schedule')->where('schedule_id',$story_schedule_id)->where('story_schedule.story_id','=',$story_id)->update(['read_status'=>1]);
	
		   DB::table('story_schedule')->where('schedule_id',$story_schedule_id)->where('story_schedule.story_id','=',$story_id)->update(['read_date_time'=>date('Y-m-d H:i:s')]);  

		   $story_points = DB::table('points_plan')->get();
		   $points = $story_points[0]->story;

		   DB::table('points')->insertGetId(['child_id'=>$_SESSION['child_id'], 'points'=>$points, 'date'=>date('Y-m-d'), 'content_id'=>3]); //update the points


		}

		return view('kids_views.storyBook')->with('title','Story Book')
										   ->with('child',$child_results)
										   ->with('story_path',$story_path)
										   ->with('story_name',$story_name)
										   ->with('story_id',$story_id)
										   ->with('story_img_path',$story_img_path);

	}


/**
*	@author: Nibras
*	@param: get request
*
*	desc: increment the like count when user click the like button 
*
*	created : 15/02/2016
*/

	public function likeStory(Request $request){

		$story_id = $request->input('sId');

		$story_details = DB::table('shedule')->join('story_schedule','shedule.id','=','story_schedule.schedule_id')
											->where('shedule.fk_child_id','=',$_SESSION['child_id'])
											->where('story_schedule.story_id','=',$story_id)
											->select('story_schedule.*')
											->get();


		$story_shedule_id = $story_details[0]->schedule_id;
		$story_like_status = $story_details[0]->isLike;

		if($story_like_status != 1){

			DB::table('story_schedule')->where('schedule_id',$story_shedule_id)->where('story_schedule.story_id','=',$story_id)->update(['isLike'=>1]);

			$likes = DB::table('story')->where('id','=',$story_id)->get();

			$likes_count = $likes[0]->likes;
			
			$likes_count++;

			DB::table('story')->where('id',$story_id)->update(['likes'=>$likes_count]);

		}

		return response()->json(['sId' => $story_id]);



	}


}