<?php

namespace App\Classes\uploaders;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\UploadQuestionController;
use App\Classes\validators\ContentValidator;
use App\Classes\validators\QuestionValidator;
use App\Classes\common\UploadConstants;
use DB;

/**
* @author : Jude Niroshan
* @desc : Implementations for uploading questions/answers to the system
* @created : 22/02/2016
*/

class QuestionUploader implements Uploader{
	
	//@Override
	function upload($request){

		$validator = new ContentValidator(new QuestionValidator());

        $validState  = $validator->doValidate($request);

        switch ($validState) {

            case UploadConstants::$QUESTION_NOT_ATTACHED_TO_REQUEST:
            $reason = "Question is not available";
            return UploadQuestionController::loadWithFailedReason($reason); break;

            case UploadConstants::$ANSWER_NOT_ATTACHED_TO_REQUEST:
            $reason = "Answer is not available";
            return UploadQuestionController::loadWithFailedReason($reason); break; 

            case UploadConstants::$QUESTION_ALREADY_EXIST:
            $reason = "Question already exists";
            return UploadQuestionController::loadWithFailedReason($reason); break; 

        }

		$selected_subject = $request->input('subject');
		$selected_age = $request->input('ageCategory');
		

		$target_path = "\assets\uploads\question\img\\"; //Declaring Path for uploaded images
        $j = 0; //Variable for indexing uploaded image 
        $user_id = 100;
        $name = $request->input('fileName');

        $question = $request->input('question');
        $ans1 = $request->input('ans1');
        $ans2 = $request->input('ans2');
        $ans3 = $request->input('ans3');
        $ans4 = $request->input('ans4');

        $ans1_iscorrect = ($request->input('ans1_correct') == null || $request->input('ans1_correct') == '') ? 0 : 1;
        $ans2_iscorrect = ($request->input('ans2_correct') == null || $request->input('ans2_correct') == '') ? 0 : 1;
        $ans3_iscorrect = ($request->input('ans3_correct') == null || $request->input('ans3_correct') == '') ? 0 : 1;
        $ans4_iscorrect = ($request->input('ans4_correct') == null || $request->input('ans4_correct') == '') ? 0 : 1;
        

        $unique_img_path_arr = array();

        $attached_file = basename($_FILES['file']['name'][0]);

        for ($i = 0; $i < count($_FILES['file']['name']); $i++) {

            $ext = explode('.', basename($_FILES['file']['name'][$i]));//explode file name from dot(.) 
            $file_extension = end($ext); //store extensions in the variable

            $new_img_name = $target_path . $name . md5(uniqid()) . "." . $ext[count($ext) - 1];//set the target path with a new name of image
            $j = $j + 1;//increment the number of uploaded images according to the files in array       

            if(!(!isset($attached_file) || trim($attached_file)==='')){

                if (($_FILES["file"]["size"][$i] < 10000000) //Approx. 10MB files can be uploaded.
                && in_array($file_extension, UploadConstants::$g_valid_img_extensions)) {

                    if (move_uploaded_file($_FILES['file']['tmp_name'][$i], public_path() . $new_img_name)) {//if file moved to uploads folder
                        
                        array_push($unique_img_path_arr, $new_img_name);

                    } else {//if file was not moved.
                            $reason = "Problem occured while uploading the image files";
                            return UploadQuestionController::loadWithFailedReason($reason);
                    }
                } else {//if file size and file type was incorrect.
                        $reason = "Invalid image format. Please use only .jpeg/.jpg/.png";
                        return UploadQuestionController::loadWithFailedReason($reason);
                }
            }

        }// End of for loop for multiple images


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
                'active' => 1,

            )); 

        DB::table('answer')->insert(
            array(
                'questionid' => $question_id, 
                'answer' => $ans2,
                'iscorrect' => $ans2_iscorrect,
                'active' => 1,

                )); 

        DB::table('answer')->insert(
            array(
                'questionid' => $question_id, 
                'answer' => $ans3,
                'iscorrect' => $ans3_iscorrect,
                'active' => 1,

                )); 

        DB::table('answer')->insert(
            array(
                'questionid' => $question_id, 
                'answer' => $ans4,
                'iscorrect' => $ans4_iscorrect,
                'active' => 1,

                )); 
                    

        $msg = "Question has successfully added";

        /*********** SUCCESS REDIRECT *************/
        $subjects = DB::table('subject')->get();
        $age_groups = DB::table('age_group')->get();
        
        $active_questions = DB::table('question')->where('active', '=', '1')->get();
        $question_bank = array();
        foreach ($active_questions as $row) {

            $subject = DB::table('subject')->select('subject')->where('id', '=', $row->subjectid)->get();
            $age_group = DB::table('age_group')->where('id', '=', $row->agegroupid)->get();

            $question_obj = array('question_id' => $row->id,
                'question' => $row->question,
                'subject' => $subject[0]->subject,
                'agegroup' => $age_group[0]->agefrom . ' - ' . $age_group[0]->ageto,
                'likes' => $row->likes,
                'views' => $row->totalviews
                );
            array_push($question_bank, $question_obj);
        }

        return view('unicon_admin.uploadQuestion')
        ->with('sub',$subjects)
        ->with('agecat', $age_groups)
        ->with('title','Upload | Questions')
        ->with('table_data', $question_bank);

        /*********** END SUCCESS REDIRECT *************/
	}
}