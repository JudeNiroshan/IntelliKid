<?php

namespace App\Classes\uploaders;


/**
* @author : Jude Niroshan
* @desc : Implementations for uploading questions/answers to the system
* @created : 22/02/2016
*/

class QuestionUploader implements Uploader{
	
	//@Override
	function upload(){

		echo "uploading questions here!!!";

		$selected_subject = $request->input('subject');
		$selected_age = $request->input('ageCategory');
		

		$target_path = public_path() . "\assets\uploads\question\img\\"; //Declaring Path for uploaded images
            $j = 0; //Variable for indexing uploaded image 
            $user_id = 100;
            $name = $request->input('fileName');
            $question = $request->input('question');
            $ans1 = $request->input('ans1');
            $ans2 = $request->input('ans2');
            $ans3 = $request->input('ans3');
            $ans4 = $request->input('ans4');

            $ans1_iscorrect = $request->input('ans1_correct') == null ? 0 : 1;
            $ans2_iscorrect = $request->input('ans2_correct') == null ? 0 : 1;
            $ans3_iscorrect = $request->input('ans3_correct') == null ? 0 : 1;
            $ans4_iscorrect = $request->input('ans4_correct') == null ? 0 : 1;

            $unique_img_path_arr = array();

            $zzz = basename($_FILES['file']['name'][0]);

            if((!isset($zzz) || trim($zzz)==='')){
                echo "file name is empty. so i think file is also not there";
            }else{
                echo"file is not empty";
            }
            
            for ($i = 0; $i < count($_FILES['file']['name']); $i++) {

                $ext = explode('.', basename($_FILES['file']['name'][$i]));//explode file name from dot(.) 
                $file_extension = end($ext); //store extensions in the variable

                $new_img_name = $target_path . $name . md5(uniqid()) . "." . $ext[count($ext) - 1];//set the target path with a new name of image
                $j = $j + 1;//increment the number of uploaded images according to the files in array       

                if(!(!isset($zzz) || trim($zzz)==='')){

                    if (($_FILES["file"]["size"][$i] < 10000000) //Approx. 10MB files can be uploaded.
                    && in_array($file_extension, UploadConstants::$g_valid_img_extensions)) {

                        if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $new_img_name)) {//if file moved to uploads folder
                            array_push($unique_img_path_arr, $new_img_name);
                        } else {//if file was not moved.
                            echo $j. ').<span id="error">please try again!.</span><br/><br/>';
                        }
                    } else {//if file size and file type was incorrect.
                        echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
                    }
                }

            }// End of for loop for multiple images



            $existing_q_name = DB::table('question')->select('question')->where('question', '=', $question)->get();
            //$destinationPath = public_path() . "\assets\uploads\stry\\";
            echo " JUDE ADDED ::::: ". count($existing_q_name);
            if (count($existing_q_name) > 0) {

                $reason = "Question already exists";
                            // CHANGE TO STORY CONTROLLER
                return UploadQuestionController::loadWithFailedReason($reason);

            }

                    $temp_id = DB::table('content_type')->select('id')->where('type', '=', 'question')->get();
                    $content_type_id = $temp_id[0]->id;
                    $timestamp = date('y-m-d H:i:s');                 
                    $content_id = DB::table('content')->insertGetId(array('contenttypeid' => $content_type_id, 'creator' => $user_id, 'datetime' => $timestamp));

                    $question_id = DB::table('question')->insertGetId(
                        array(
                            'contentid' => $content_id, 
                            'question' => $question,
                            'subjectid' => $selected_subject,
                            'agegroupid' => $selected_age,
                            'likes' => 0,
                            'totalviews' => 0,
                            'active' => 1
                            )); 

                    if(count($unique_img_path_arr) > 0){
                        foreach ($unique_img_path_arr as $value) {

                            DB::table('question_image')->insert(
                                array(
                                    'questionid' => $question_id, 
                                    'path' => $value,

                                    )); 
                        }
                    }

                    
                    DB::table('answer')->insert(
                        array(
                            'questionid' => $question_id, 
                            'answer' => $ans1,
                            'iscorrect' => $ans1_iscorrect,
                            'desc' => '',
                            'active' => 1,

                            )); 

                    DB::table('answer')->insert(
                        array(
                            'questionid' => $question_id, 
                            'answer' => $ans2,
                            'iscorrect' => $ans1_iscorrect,
                            'desc' => '',
                            'active' => 1,

                            )); 

                    DB::table('answer')->insert(
                        array(
                            'questionid' => $question_id, 
                            'answer' => $ans3,
                            'iscorrect' => $ans1_iscorrect,
                            'desc' => '',
                            'active' => 1,

                            )); 

                    DB::table('answer')->insert(
                        array(
                            'questionid' => $question_id, 
                            'answer' => $ans4,
                            'iscorrect' => $ans1_iscorrect,
                            'desc' => '',
                            'active' => 1,

                            )); 
                    

                    $msg = "Question has successfully added";

                    $subjects = DB::table('subject')->get();

                    $age_groups = DB::table('age_group')->get();

                    $path_list_for_name = DB::table('story')->where('active', '=', '1')->get();
                    $story = array();
                    foreach ($path_list_for_name as $row) {

                        $temp_id = DB::table('story_image')->where('storyid', '=', $row->id)->get();
                        $story_img = $temp_id[0]->path;

                        $story_tile_obj = array('name' => $row->name,
                            'path' => strstr($story_img, 'assets')
                            );
                        array_push($story, $story_tile_obj);
                    }

                    return view('unicon_admin.uploadQuestion')
                    ->with('sub',$subjects)
                    ->with('agecat', $age_groups)
                    ->with('title','Dashboard')
                    ->with('msg', $msg)
                    ->with('gallery_data', $story);
	}
}