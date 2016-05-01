<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class achievment_controller extends Controller{

	/**
*	@author: Nibras
*	@param: none
*
*	desc: fetch data from points table and load the points with detailed which earned by child
*
*	@created : 19/03/2016
*/
	public function loadPoints(){

		
		$child_results = DB::table('user')->join('child','user.id','=','child.id')
										  ->where('user.id','=',$_SESSION['child_id'])->first();   //child details

		$child_id = $_SESSION['child_id'];


		$videoPoints = DB::select("select sum(points) as points from points where content_id = 1 and child_id = '$child_id' ");
		$audioPoints = DB::select("select sum(points) as points from points where content_id = 2 and child_id = '$child_id' ");
		$storyPoints = DB::select("select sum(points) as points from points where content_id = 3 and child_id = '$child_id' ");
		$quizPoints = DB::select("select sum(points) as points from points where content_id = 4 and child_id = '$child_id' ");

		$vPoints = $videoPoints[0]->points;
		$aPoints = $audioPoints[0]->points;
		$sPoints = $storyPoints[0]->points;
		$qPoints = $quizPoints[0]->points;

		return view('kids_views.achievment')->with('title','Achievment')
											->with('videoPoints',$vPoints)
											->with('audioPoints',$aPoints)
											->with('storyPoints',$sPoints)
											->with('quizPoints',$qPoints)
											->with('loadPointsStatus',true)
											->with('viewPointsStatus',false)
											->with('points_array',null)
										    ->with('child',$child_results);



	}

	/**
*	@author: Nibras
*	@param: none
*
*	desc: fetch data from points table and according to the user selection(points type and date) points details will be shown in table view
*
*	@created : 23/03/2016
*/
	public function viewPoints(Request $request){

		

		$child_results = DB::table('user')->join('child','user.id','=','child.id')
										  ->where('user.id','=',$_SESSION['child_id'])->first();   //child details

		$points_type = $request->input('points_type');

		if ($points_type == "Video") {
			$contentId = 1;
		}elseif ($points_type == "Audio") {
			$contentId = 2;
		}elseif ($points_type == "Story") {
			$contentId = 3;
		}else{
			$contentId = 4;
		}

		$points_array = DB::table('points')->where('content_id','=',$contentId)
										   ->where('child_id','=',$_SESSION['child_id'])->get();	

		return view('kids_views.achievment')->with('title','Achievment')
											->with('points_array',$points_array)
											->with('videoPoints',null)
											->with('audioPoints',null)
											->with('storyPoints',null)
											->with('quizPoints',null)
											->with('viewPointsStatus',true)
											->with('loadPointsStatus',false)	
										  	->with('child',$child_results);

	}


}