<?php

namespace App\Classes\uploaders;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\UploadStoryController;
use App\Classes\validators\ContentValidator;
use App\Classes\validators\StoryValidator;
use App\Classes\common\UploadConstants;
use DB;

/**
* @author : Jude Niroshan
* @desc : Implementations for uploading stories to the system
* @created : 22/02/2016
*/

class StoryUploader implements Uploader{
	
	//@Override
	function upload($request){

		$validator = new ContentValidator(new StoryValidator());

        $validState  = $validator->doValidate($request);

        switch ($validState) {

            case UploadConstants::$FILE_NAME_NOT_ATTACHED_TO_REQUEST:
            $reason = "Story file name is not available";
            return UploadStoryController::loadWithFailedReason($reason); break; 

            case UploadConstants::$STORY_NOT_ATTACHED_TO_REQUEST:
            $reason = "Story is not available";
            return UploadStoryController::loadWithFailedReason($reason); break; 

            case UploadConstants::$FILE_ALREADY_EXISTS:
            $reason = "File already exists";
            return UploadStoryController::loadWithFailedReason($reason); break; 

        }

		$selected_subject = $request->input('subject');
		$selected_age = $request->input('ageCategory');

        
        $target_path = "assets\uploads\stry\Img\\"; //Declaring Path for uploaded images
        $j = 0; //Variable for indexing uploaded image 
        $user_id = 100;
        $name = $request->input('fileName');
        $story = $request->input('story');
        $unique_img_path_arr = array();

        for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
                
            $ext = explode('.', basename($_FILES['file']['name'][$i]));//explode file name from dot(.) 
            $file_extension = end($ext); //store extensions in the variable

               
            $new_img_name = $target_path . $name . md5(uniqid()) . "." . $ext[count($ext) - 1];//set the target path with a new name of image
            $j = $j + 1;//increment the number of uploaded images according to the files in array       

            if (($_FILES["file"]["size"][$i] < 10000000) //Approx. 10MB files can be uploaded.
                && in_array($file_extension, UploadConstants::$g_valid_img_extensions)) {

                if (move_uploaded_file($_FILES['file']['tmp_name'][$i], public_path() . '\\' .$new_img_name)) {//if file moved to uploads folder
                    
                    array_push($unique_img_path_arr, $new_img_name);

                }
            } 

         }// End of for loop for multiple images

         if(count($unique_img_path_arr) > 0){

            $path_list_for_name = DB::table('story')->select('path')->where('name', '=', $name)->get();
            $destinationPath = "assets\uploads\stry\\";
            
            $outWriteFile = UploadStoryController::writeToFile($name, $story);

            $temp_id = DB::table('content_type')->select('id')->where('type', '=', 'question')->get();
            $content_type_id = $temp_id[0]->id;
            $timestamp = date('y-m-d H:i:s');                 
            $content_id = DB::table('content')->insertGetId(array('contenttypeid' => $content_type_id, 'creator' => $user_id, 'datetime' => $timestamp));

            $story_id = DB::table('story')->insertGetId(
                array(
                    'contentid' => $content_id, 
                    'name' => $name,
                    'path' => $destinationPath. $name.'.txt',
                    'subjectid' => $selected_subject,
                    'agegroupid' => $selected_age,
                    'likes' => 0,
                    'totalviews' => 0,
                    'active' => 1
                    )); 

            foreach ($unique_img_path_arr as $value) {

                DB::table('story_image')->insert(
                    array(
                        'storyid' => $story_id, 
                        'path' => $value,

                        )); 
            }
                    
          }

          return UploadStoryController::loadWithDefaultData();

	}
}