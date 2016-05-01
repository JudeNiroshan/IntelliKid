<?php

namespace App\Classes\validators;

use App\Classes\common\UploadConstants;
use DB;

/**
* @author : Jude Niroshan
* @desc : Validation for story upload is done in this class
* @created : 22/02/2016
*/

class StoryValidator {

	//@Override
    function validate($request){

		$story = $request->input('story');
		$name = $request->input('fileName');

		if($name == null){

			return UploadConstants::$FILE_NAME_NOT_ATTACHED_TO_REQUEST;
		}

		if($story == null){

			return UploadConstants::$STORY_NOT_ATTACHED_TO_REQUEST;
		}

		
		$path_list_for_name = DB::table('story')->select('path')->where('name', '=', $name)->get();
        $destinationPath = "\assets\uploads\stry\\";

        foreach ($path_list_for_name as $row) {
             $path_for_name = $row->path;
             print_r($path_for_name);
             $destinationPath = "\assets\uploads\stry\\";// 

             if($destinationPath.$name.'.txt' == $path_for_name){

                 return UploadConstants::$FILE_ALREADY_EXISTS;

             }

         }//End of Loop


         return UploadConstants::$VALID_UPLOAD;
	}

}