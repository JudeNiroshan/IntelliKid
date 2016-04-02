<?php
namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;


class Kids_QuizController extends Controller{

    

    public function getQuiz(){

        $date_time_now = Carbon::now();

        $result = DB::table('exam')
                    ->join('exam_schedule', 'exam.id', '=', 'exam_schedule.exam_id')
                    ->join('shedule', 'shedule.id', '=', 'exam_schedule.schedule_id')
                    ->where('shedule.fk_child_id','=',$_SESSION['child_id'])
                    ->where('exam_schedule.taken_status','=',0)
                    ->select('dueTime','exam.name as ename','exam.id as eid','exam_schedule.schedule_id','shedule.fk_child_id')
                    ->get();
        
        $date_now = Carbon::now()->format('m/d/Y');    
        //$date_now = Carbon::parse('04/06/2016');            

        
        return view('kids_views.quiz')->with('quizCategory',$result)
                                      ->with('date_now',$date_now);  
          
    }

    public function createQuiz(Request $request){

        $exam_id = $request->input('id');
        $sid = $request->input('sid');

        $_SESSION['exam_id'] = $exam_id;
        $_SESSION['schedule_id'] = $sid;

        $kids_QuizMaker = new Kids_QuizMaker();
        return $kids_QuizMaker->displayQuiz($exam_id,$sid);

        
                                         
    }    

    /*public function createQuiz(){

        $quizAndAns = DB::table('quiz')->get();
        print_r(count($quizAndAns));
        print_r("<br/>");
        print_r($quizAndAns);

        return view('kids_views.template')->with('quizAndAns',$quizAndAns)
                                          ->with('noOfQuestion',count($quizAndAns));    
    }*/
    
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

        $cid = $_SESSION['child_id'] ;
        
        $id = DB::table('exam_result')->insertGetId(
            array('num_question' => $numQuestions, 'num_correct_ans' => $numCorrectAns,
                  'category' => 'Maths','date_time' => Carbon::now(),'madal' => $madal,'cid'=> $cid)
        );

        DB::table('exam_schedule')
            ->where('exam_id', $_SESSION['exam_id'])
            ->where('schedule_id', $_SESSION['schedule_id'])
            ->update(['taken_status' => 1]);


        $_SESSION['quiz_id'] = $id;
        
    }

    public function certificate(){
        //$_SESSION['quiz_id'] = 17; 
        $cid = $_SESSION['child_id'];

        $result = DB::table('exam_result')->where('id','=',$_SESSION['quiz_id'])->where('cid','=',$cid)->get();
        $child_result = DB::table('user')->where('id','=',$cid)->get();

        //print_r($result);
        return view('kids_views.kids_certificate')->with('result',$result)->with('child_result',$child_result); 
    }
}
