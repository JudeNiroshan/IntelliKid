<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;



class videos_controller extends Controller{

/**
*	@author: Nibras
*	@param: none
*
*	desc: fetch data from video_shedule,video and shedule table and dislpay detailed video list in page, if there arn't any
*		 data, redirect to error page
*
*	created : 03/02/2016 
*/	
 

	public function loadVideoPage(){
		

		$child_results = DB::table('user')->join('child','user.id','=','child.id')
										  ->where('user.id','=',104)->first();//child details
		

	    $video_list = DB::table('video_shedule')->join('video','video_shedule.video_id','=','video.id')
										->join('shedule','video_shedule.shedule_id','=','shedule.id')	
										->where('shedule.fk_child_id','=',$_SESSION['child_id'])
										->where('shedule.dueTime','>',date('Y-m-d H:i:s'))
										->where('video_shedule.status',0)
										->select('video.*')
										->get();	
				
		
	
		if(isset($video_list[0])!=null){
			return view('kids_views.videos')->with('title','Videos')
										->with('video_list',$video_list)
										->with('child',$child_results);
										
		}

		else{
			return view('kids_views.errorPage')->with('title','Videos')
										->with('child',$child_results);

		}


	}

/**
*	@author: Nibras
*	@param: get request
*
*	desc: increment the views count when user click the play button
*
*	created : 03/02/2016 
*/

	public function updateDb_onPlay(Request $request){
	
		$video_id = $request->input('vId');


		$views = DB::table('video')->where('id','=',$video_id)->select('totalviews')->get();  

		$views_count = $views[0]->totalviews;
		$views_count++;

		DB::table('video')->where('id',$video_id)->update(['totalviews'=>$views_count]);

	}

/**
*	@author: Nibras
*	@param: get request
*
*	desc: when user finished played the audio,update the seen status and date.also increment the points
*
*	created : 03/02/2016  
*/

	public function updateDb_onEnd(Request $request){

			

			$video_id = $request->input('vId');



			$video_details = DB::table('shedule')->join('video_shedule','shedule.id','=','video_shedule.shedule_id')
											->where('shedule.fk_child_id','=',$_SESSION['child_id'])
											->where('video_shedule.video_id','=',$video_id)
											->select('video_shedule.*') 
											->get();

			$video_shedule_id = $video_details[0]->shedule_id;
			$video_status = $video_details[0]->status;


			if($video_status == 0){

				

				DB::table('video_shedule')->where('shedule_id',$video_shedule_id)->update(['status'=>1]);   //update the video status to 'seen'
	
				DB::table('video_shedule')->where('shedule_id',$video_shedule_id)->update(['seen_date'=>date('Y-m-d H:i:s')]);   //update the video seen date to current date

				$video_points = DB::table('points_plan')->get();
				$points = $video_points[0]->video;


				DB::table('points')->insertGetId(['child_id'=>$_SESSION['child_id'], 'points'=>$points, 'date'=>date('Y-m-d'), 'content_id'=>1]); //update the points

			}

	}

/**
*	@author: Nibras
*	@param: get request
*
*	desc: increment the like count when user click the like button 
*
*	created : 05/02/2016 
*/

	public function likeVideo(Request $request){

		
		$video_id = $request->input('vId');

		$video_details = DB::table('shedule')->join('video_shedule','shedule.id','=','video_shedule.shedule_id')
											->where('shedule.fk_child_id','=',$_SESSION['child_id'])
											->where('video_shedule.video_id','=',$video_id)
											->select('video_shedule.*')
											->get();


			$video_shedule_id = $video_details[0]->shedule_id;
			$video_like_status = $video_details[0]->isLike;

		if($video_like_status != 1){

			DB::table('video_shedule')->where('shedule_id',$video_shedule_id)->update(['isLike'=>1]);

			$likes = DB::table('video')->where('id','=',$video_id)->get();

			$likes_count = $likes[0]->likes;
			
			$likes_count++;

			DB::table('video')->where('id',$video_id)->update(['likes'=>$likes_count]);

		}

		return response()->json(['vId' => $video_id]);

	}


}