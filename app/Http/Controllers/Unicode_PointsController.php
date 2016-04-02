<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class Unicode_PointsController extends Controller{

	/**
	*@author: fazeel
	*@param:  videoPoints, audioPoints, storyPoints, questionPoints
	*@desc: manage points for each content
	*@created: 10/02/16
	*/
	public function updatePointsTable(Request $request){

		$videoPoints = $request->input('videoPoints');
		$audioPoints = $request->input('audioPoints');
		$storyPoints = $request->input('storyPoints');
		$questionPoints = $request->input('questionPoints');


		$result = DB::table('points_plan')
		            ->where('id', 1)
		            ->update(['video' => $request->input('videoPoints'),
		            		  'audio' => $request->input('audioPoints'),
		            		  'story' => $request->input('storyPoints'),
		            		  'quesion' => $request->input('questionPoints')]);        
            
	}
    
}
	