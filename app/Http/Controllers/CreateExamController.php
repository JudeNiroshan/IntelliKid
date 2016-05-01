<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

/**
* @author : Jude Niroshan
* @desc : this class is responsible for handling create exams related functions
* @created : 27/03/2016
*/

class CreateExamController extends Controller
{
    
    /*
    * This method only load the drop down values and no other data will be loaded.
    */
    public static function loadWithDefaultData(){

    	$subjects = DB::table('subject')->get();
    	$age_groups = DB::table('age_group')->get();
        
    	return view('unicon_admin.createExams')
    			->with('sub',$subjects)
    			->with('agecat', $age_groups)
    			->with('title','Create | Exams');
    }


    /*
    * This method only load the questions based on the selected subject and the age category from the DB
    */
    public static function loadQuestionsForUI(Request $request){

        $sub_id = $request->sub_id;
        $age_cat = $request->age_id;

        $matchThese = ['subjectid' => $sub_id, 'agegroupid' => $age_cat, 'active' => '1'];
        $question_list = DB::table('question')->where($matchThese)->get();

        return $question_list;
    }


    /*
    * This method used to set the question ids into the session
    */
    public static function addToSession(Request $request){
        $q_arr = array();

        if(isset($_SESSION["selected_question_arr"])){
           $q_arr = $_SESSION["selected_question_arr"];
           if(count($q_arr) >= 15){
                return "EXCEED";
           }

           foreach ($q_arr as $element) {
               if($element == $request->q_id){
                    return "ALREADY";
               }

           }
           array_push($q_arr,$request->q_id);
        }

        $_SESSION["selected_question_arr"] = $q_arr;

        return "OK";
    }

    /*
    * This method save the exam in the DataBase
    */
    public static function createExam(Request $request){
        try{
            $sub_id = $request->subject;
            $age_cat = $request->ageCategory;

            $exam_name = $request->examName;

            echo "$sub_id \n";
            echo "$age_cat \n";
            echo "$exam_name \n";

            
            $exam_id = DB::table('exam')->insertGetId(array(
                'name' => $exam_name, 
                'subject_id' => $sub_id, 
                'age_group_id' => $age_cat, 
                'status' => '1'));

            $question_ids = $_SESSION["selected_question_arr"];

            $batch_insert = array();

            foreach ($question_ids as $value) {
                $one_row = array('exam_id' => $exam_id, 'question_id' => $value);
                array_push($batch_insert,$one_row);
            }

            // Batch insert
            DB::table('exam_question')->insert($batch_insert);

            $subjects = DB::table('subject')->get();
            $age_groups = DB::table('age_group')->get();
            
            /*return view('unicon_admin.createExams')
                    ->with('sub',$subjects)
                    ->with('agecat', $age_groups)
                    ->with('title','Create | Exams')
                    ->with('upload_status_success', 'OK');*/
        }catch(Exception $e){
            $subjects = DB::table('subject')->get();
            $age_groups = DB::table('age_group')->get();
            
            return view('unicon_admin.createExams')
                    ->with('sub',$subjects)
                    ->with('agecat', $age_groups)
                    ->with('title','Create | Exams')
                    ->with('upload_status_fail', 'ERROR');
        }
    }
}
