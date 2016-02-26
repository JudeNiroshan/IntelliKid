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
		->with('title','Question | Upload')
		->with('table_data', $question_bank);
	}

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
}
