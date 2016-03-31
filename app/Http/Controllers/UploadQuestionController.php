<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

/**
* @author : Jude Niroshan
* @desc : this class is responsible for handling question upload related functions
* @created : 11/02/2016
*/

class UploadQuestionController extends Controller
{

    /**
    * @desc : This method is used to displaying Upload Question page in the system.
    */
	public function loadWithDefaultData(){
		
        $subjects = DB::table('subject')->get();
		$age_groups = DB::table('age_group')->get();

		$active_questions = DB::table('question')->where('active', '=', '1')->get();
		$question_bank = array();
		foreach ($active_questions as $row) {

			$subject = DB::table('subject')->select('subject')->where('id', '=', $row->subjectid)->get();
			$age_group = DB::table('age_group')->where('id', '=', $row->agegroupid)->get();

			//$temp_id = DB::table('story_image')->where('storyid', '=', $row->id)->get();
			//$story_img = $temp_id[0]->path;

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
	}

    /**
    * @desc : This method is used to displaying Upload Question page in the system alone with the error message
    */
	public static function loadWithFailedReason($fail_reason){

    	$subjects = DB::table('subject')->get();
    	$age_groups = DB::table('age_group')->get();

        $path_list_for_name = DB::table('audio')->where('active', '=', '1')->get();
        $songs = array();
        foreach ($path_list_for_name as $row) {
            $song_tile_obj = array('name' => $row->name,
                                    'path' => strstr($row->path, 'assets'),
                                    'img_path' => strstr($row->img_path, 'assets'),
                                    'length' => $row->length );
            array_push($songs, $song_tile_obj);
        }

		return view('unicon_admin.uploadQuestion')
    			->with('sub',$subjects)
    			->with('agecat', $age_groups)
    			->with('error', $fail_reason)
    			->with('title','Upload | Questions')
                ->with('gallery_data', $songs);	
    	
    }


    /**
    * @desc : This method is used to remove Question from the system.
    */
    public function deleteQuestion(Request $request){

    	$sql_query = 'UPDATE question SET active=0 WHERE id = ' . $request->Q_ID;
    	DB::Statement($sql_query);
    	return "success";
    }


    /**
    * @desc : This method is used to displaying Question for in editing panel
    */
    public function loadQuestionForEditing(Request $request){


    	$question_id = $request->Q_ID;

    	$subjects = DB::table('subject')->get();
		$age_groups = DB::table('age_group')->get();
		$question_text = DB::table('question')->select('question')->where('id', '=', $question_id)->get();
		$sel_sub = DB::table('question')->select('subjectid')->where('id', '=', $question_id)->get();
		$sel_age = DB::table('question')->select('agegroupid')->where('id', '=', $question_id)->get();

		$answers = array();

		$answer_list = DB::table('answer')->where('questionid', '=', $question_id)->get();
		foreach ($answer_list as $row) {
            $answer_obj = array('answer_text' => $row->answer,
                                    'id' => $row->id,
                                    'iscorrect' => $row->iscorrect,
                                    'active' => $row->active );
            array_push($answers, $answer_obj);
        }

        $ret_arr = array(
        				'sub' => $subjects, 
        				'agecat' => $age_groups, 
        				'sel_sub' => $sel_sub, 
        				'sel_age' => $sel_age, 
        				'q_id' => $question_id, 
        				'question' => $question_text, 
        				'answers_data' => $answers
        				
        				);

        return $ret_arr;

    }


    /**
    * @desc : This method is used to save the Edited Question in the system
    */
    public function saveQuestionEdits(Request $request){

    	
    	$question_id = $request->question_id;

    	$question = $request->question;
    	$subject = $request->subject;
    	$ageCategory = $request->ageCategory;
    	$ans1 = $request->ans1;
    	$ans2 = $request->ans2;
    	$ans3 = $request->ans3;
    	$ans4 = $request->ans4;

    	$ans1_id = $request->ans1_id;
		$ans2_id = $request->ans2_id;
		$ans3_id = $request->ans3_id;
		$ans4_id = $request->ans4_id;

    	$ans1_correct = ($request->ans1_correct == null) ? 0 : $request->ans1_correct;
    	$ans2_correct = ($request->ans2_correct == null) ? 0 : $request->ans2_correct;
    	$ans3_correct = ($request->ans3_correct == null) ? 0 : $request->ans3_correct;
    	$ans4_correct = ($request->ans4_correct == null) ? 0 : $request->ans4_correct;

    	if($question == null || $question == ''){

    		$reason = "cannot be empty";
    		return UploadQuestionController::retEditStatus("false", $reason);
    	}

    	if($ans1 == '' || $ans2 == '' || $ans3 == '' || $ans4 == ''){

    		$reason = "Answers cannot be empty";
    		return UploadQuestionController::retEditStatus("false", $reason);
    	}

    	DB::table('question')
            ->where('id', $question_id)
            ->update(['question' => $question, 'subjectid' => $subject, 'agegroupid' => $ageCategory]);


        DB::table('answer')
            ->where('id', $ans1_id)
            ->update(['answer' => $ans1, 'iscorrect' => $ans1_correct]);

        DB::table('answer')
            ->where('id', $ans2_id)
            ->update(['answer' => $ans2, 'iscorrect' => $ans2_correct]);

        DB::table('answer')
            ->where('id', $ans3_id)
            ->update(['answer' => $ans3, 'iscorrect' => $ans3_correct]);

        DB::table('answer')
            ->where('id', $ans4_id)
            ->update(['answer' => $ans4, 'iscorrect' => $ans4_correct]);

		return UploadQuestionController::retEditStatus("true", "Successfully Saved");
		
    }

    /**
    * @desc : This method is used to return the edited status back to the view layer
    */
    public static function retEditStatus($isSuccess, $message){

    	$subjects = DB::table('subject')->get();
		$age_groups = DB::table('age_group')->get();

		$active_questions = DB::table('question')->where('active', '=', '1')->get();
		$question_bank = array();
		foreach ($active_questions as $row) {

			$subject = DB::table('subject')->select('subject')->where('id', '=', $row->subjectid)->get();
			$age_group = DB::table('age_group')->where('id', '=', $row->agegroupid)->get();

			//$temp_id = DB::table('story_image')->where('storyid', '=', $row->id)->get();
			//$story_img = $temp_id[0]->path;

			$question_obj = array('question_id' => $row->id,
				'question' => $row->question,
				'subject' => $subject[0]->subject,
				'agegroup' => $age_group[0]->agefrom . ' - ' . $age_group[0]->ageto,
				'likes' => $row->likes,
				'views' => $row->totalviews
				);
			array_push($question_bank, $question_obj);
		}

		if($isSuccess == "true"){

			return view('unicon_admin.uploadQuestion')
			->with('sub',$subjects)
			->with('agecat', $age_groups)
			->with('title','Question | Upload')
			->with('edit_Q_Status', $message)
			->with('table_data', $question_bank);
		}else{

			return view('unicon_admin.uploadQuestion')
			->with('sub',$subjects)
			->with('agecat', $age_groups)
			->with('title','Upload | Questions')
			->with('edit_Q_fail', $message)
			->with('table_data', $question_bank);
		}
		
    }
}
