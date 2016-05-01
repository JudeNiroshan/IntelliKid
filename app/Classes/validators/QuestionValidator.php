<?php

namespace App\Classes\validators;

use App\Classes\common\UploadConstants;
use DB;

/**
* @author : Jude Niroshan
* @desc : Validation for question upload is done in this class
* @created : 23/02/2016
*/

class QuestionValidator {

	//@Override
    function validate($request){

		$question = $request->input('question');
		$ans1 = $request->input('ans1');
        $ans2 = $request->input('ans2');
        $ans3 = $request->input('ans3');
        $ans4 = $request->input('ans4');

		if($question == null || $question = ''){

			return UploadConstants::$QUESTION_NOT_ATTACHED_TO_REQUEST;
		}

		if(($ans1 == null || $ans1 = '') || ($ans2 == null || $ans2 = '') || ($ans3 == null || $ans3 = '') || ($ans4 == null || $ans4 = '') ){

			return UploadConstants::$ANSWER_NOT_ATTACHED_TO_REQUEST;
		}

		$existing_q_name = DB::table('question')->select('question')->where('question', '=', $question)->get();
            
        if (count($existing_q_name) > 0) {

           	return UploadConstants::$QUESTION_ALREADY_EXIST;
            
        }

        return UploadConstants::$VALID_UPLOAD;
	}

}