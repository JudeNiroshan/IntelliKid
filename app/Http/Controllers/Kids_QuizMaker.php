<?php
namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;


class Kids_QuizMaker extends Controller{

    public function displayQuiz($exam_id,$sid){
        
        

        $exam = DB::table('exam')->where('id','=',$exam_id)->first();
        $exam_question = DB::table('exam_question')->where('exam_id','=',$exam_id)->get();


        $i = 0;
        $quizAndAns = array();
        $track_Num_Que =  count($exam_question);

        foreach ($exam_question as $row) {
            $question = DB::table('question')->where('id','=',$row->question_id)->first();
            $question_image = DB::table('question_image')->where('questionid','=',$row->question_id)->first();

            if($question_image == "" || $question_image == null)
                $question_image = "";

            $options = DB::table('answer')->where('questionid','=',$row->question_id)->get();

            $option= array();
            $j = 0;
            $answer = -1;
            foreach ($options as $r) {
                $option[$j] = $r->answer;
                if($r->iscorrect == 1){
                    $answer = $j;
                }
                $j++;
            }
            
            $quizArray[$i] = [
                               "id"      => $row->question_id, 
                               "question"=> $question->question,
                               "option1" => $option[0],
                               "option2" => $option[1],
                               "option3" => $option[2],
                               "option4" => $option[3],
                               "image_path" =>  $question_image,
                               "answer"  => $answer ];
            
            $i++;                      
        } 

        

       $child_results = DB::table('user')->join('child','user.id','=','child.id')
                            ->where('child.id','=',$_SESSION['child_id'])->first(); 

        return view('kids_views.template')->with('quizAndAns',$quizArray)
                                          ->with('exam_id',$exam_id)
                                          ->with('noOfQuestion',$track_Num_Que)
                                          ->with('child',$child_results)
                                      ->with('title','Quiz');    

    }
}
