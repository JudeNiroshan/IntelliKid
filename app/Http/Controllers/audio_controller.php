<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class audio_controller extends Controller{

/**
*	@author: Nibras
*	@param: none
*
*	desc: fetch data from audio_shedule,audio and shedule table and dislpay detailed audio list in page, if there arn't any
*		 data, redirect to error page
*
*	@created : 27/01/2016
*/
	public function loadAudioPage(){

		 

		$child_results = DB::table('user')->join('child','user.id','=','child.id')
										  ->where('user.id','=',$_SESSION['child_id'])->first(); 

		$audio_list = DB::table('audio_shedule')->join('audio','audio_shedule.audio_id','=','audio.id')
										->join('shedule','audio_shedule.shedule_id','=','shedule.id')	
										->where('shedule.fk_child_id','=',$_SESSION['child_id'])
										->where('shedule.dueTime','<',date('Y-m-d H:i:s'))
										->where('audio_shedule.status',0)
										->select('audio.*')
										->get();

		
		
		if(isset($audio_list[0])!=null){
			return view('kids_views.audio')->with('title','Audios')
										->with('audio_list',$audio_list)
										->with('child',$child_results);
										
		}

		else{
			return view('kids_views.errorPage')->with('title','Audios')
										->with('child',$child_results);

		}


	}

/**
*	@author: Nibras
*	@param: get request
*
*	desc: increment the list count when user click the play button
*
*	@created : 27/01/2016
*/


	public function updateDb_onPlay(Request $request){

	
	$audio_id = $request->input('aId');

		

			$views = DB::table('audio')->where('id','=',$audio_id)->select('totalviews')->get(); 
			$views_count = $views[0]->totalviews;
			$views_count++;
		

			DB::table('audio')->where('id',$audio_id)->update(['totalviews'=>$views_count]);

		
	}

/**
*	@author: Nibras
*	@param: get request
*
*	desc: when user finished played the audio,update the seen status and date.also increment the points
*
*	@created : 28/01/2016
*/


	public function updateDb_onEnd(Request $request){

		

			$audio_id = $request->input('aId');

			$audio_details = DB::table('shedule')->join('audio_shedule','shedule.id','=','audio_shedule.shedule_id')
											->where('shedule.fk_child_id','=',$_SESSION['child_id'])
											->where('audio_shedule.audio_id','=',$audio_id)
											->select('audio_shedule.*')
											->get();


			$audio_shedule_id = $audio_details[0]->shedule_id;
			$audio_status = $audio_details[0]->status;



			if($audio_status == 0){

				DB::table('audio_shedule')->where('shedule_id',$audio_shedule_id)->where('audio_shedule.audio_id','=',$audio_id)->update(['status'=>1]);   //update the audio status to 'seen'
	
				DB::table('audio_shedule')->where('shedule_id',$audio_shedule_id)->where('audio_shedule.audio_id','=',$audio_id)->update(['seen_date'=>date('Y-m-d H:i:s')]);   //update the audio seen date to current date

				$audio_points = DB::table('points_plan')->get();
				$points = $audio_points[0]->audio;


				DB::table('points')->insertGetId(['child_id'=>$_SESSION['child_id'], 'points'=>$points, 'date'=>date('Y-m-d'), 'content_id'=>2]); //update the points


			}

	}

/**
*	@author: Nibras
*	@param: get request
*
*	desc: increment the like count when user click the like button
*
*	@created : 29/01/2016
*/


	public function likeAudio(Request $request){


		$audio_id = $request->input('aId');

		$audio_details = DB::table('shedule')->join('audio_shedule','shedule.id','=','audio_shedule.shedule_id')
											->where('shedule.fk_child_id','=',$_SESSION['child_id'])
											->where('audio_shedule.audio_id','=',$audio_id)
											->select('audio_shedule.*')
											->get();


		$audio_shedule_id = $audio_details[0]->shedule_id;

		$audio_like_status = $audio_details[0]->isLike;

			
		if($audio_like_status != 1){

			DB::table('audio_shedule')->where('shedule_id',$audio_shedule_id)->where('audio_shedule.audio_id','=',$audio_id)->update(['isLike'=>1]);

			$likes = DB::table('audio')->where('id','=',$audio_id)->get();

			$likes_count = $likes[0]->likes;
			
			$likes_count++;

			DB::table('audio')->where('id',$audio_id)->update(['likes'=>$likes_count]);

		}
		
		return response()->json(['aId' => $audio_id]);

	}

}