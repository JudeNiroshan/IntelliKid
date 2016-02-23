<?php
namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;


class Kids_QuizController extends Controller{

	

	public function createQuiz(){

		$quizAndAns = DB::table('quiz')->get();
		//print_r(count($quizAndAns));

		return view('kids_views.template')->with('quizAndAns',$quizAndAns)
										  ->with('noOfQuestion',count($quizAndAns));	
	}
    
    public function answer(Request $request){
    	$numCorrectAns = $request->input('numCorrect');
    	$numQuestions = $request->input('numQuestions');

    	//calculate child proformance in percentage eg: 4/5*100
    	$persentatage = ($numCorrectAns/$numQuestions)*100;

    	//assign a madal 
    	$madal ="";
    	if($persentatage>=80){
    		$madal = "1st";
    	}else if($persentatage>=60 && $persentatage<80){
    		$madal = "2nd";
    	}elseif ($persentatage>=40) {
    		$madal = "3rd";
    	}

    	$cid = 103;
    	
    	$id = DB::table('exam_result')->insertGetId(
		    array('num_question' => $numQuestions, 'num_correct_ans' => $numCorrectAns,
		    	  'category' => 'Maths','date_time' => Carbon::now(),'madal' => $madal,'cid'=> 103)
		);
		
    }

    public function certificate(){

    	$cid = 103;

    	$result = DB::table('exam_result')->where('date_time','=',date("Y-m-d"))->where('cid','=',103)->get();
    	$child_result = DB::table('user')->where('id','=',$result[0]->cid)->get();

    	//print_r($result);
		return view('kids_views.kids_certificate')->with('result',$result)->with('child_result',$child_result);	
    }
}
