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
                               "option5" => "3",
                               "answer"  => $answer ];
            
            $i++;                      
        } 

        $quizDetails = DB::table('quiz')->where('exam_id','=',$exam_id)->first(); 

        //print_r($quizArray[0]['question']);

        if(!isset($quizDetails)){
                for($v=0;$v<$track_Num_Que;$v++) {
            
                        $result = DB::table('quiz')->insert(
                            array('exam_id' => $exam_id, 'question_id' => $quizArray[$v]['id'],
                                  'category' => $exam->name,'question'=> $quizArray[$v]['question'],
                                  'option1' => $quizArray[$v]['option1'],'option2' => $quizArray[$v]['option2'],
                                  'option3' => $quizArray[$v]['option3'],'option4' => $quizArray[$v]['option4'],
                                  'option5' => $quizArray[$v]['option5'],
                                  'answer' => $quizArray[$v]['answer'])
                        ); 
                }
        }       

        $quizAndAns = DB::table('quiz')->where('exam_id','=',$exam_id)->get();

        print_r(count($quizAndAns));
        print_r("<br/>");
        print_r($quizArray);

        return view('kids_views.template')->with('quizAndAns',$quizAndAns)
                                          ->with('noOfQuestion',count($quizAndAns));   

    }
}
