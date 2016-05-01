<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Classes\common\FactoryProducer;
use DB;

class ParentQuizController extends Controller
{

  public function AllQuizView(){

  	//$data = DB::select("select *,count(id) as count from exam_question group by exam_id");
    $data = DB::select("select *,count(e.id) as count from exam e,exam_question q where  e.id = q.exam_id group by q.exam_id");

     return view('parent.quiz.all_bundels')
            ->with('quiz',$data );


  }

  public function showQuestion(){

  	$id = $_REQUEST['id'];
    $status="no";

  $quiz_items = array();
	$quiz_items = $_SESSION['quiz_que'];

	foreach($quiz_items as $item){

			if($item == $id){
				$status = "yes";
			}
	}

	if($status == "yes"){

			$msg = "has";
		}
		else{

			$msg = "no";
		}



  	$data = DB::select("select q.*,(select path from question_image a where a.questionid = q.id ) as image
 from question q 
 where q.id in (select e.question_id from exam_question e where e.exam_id = '$id')");



  	 return view('parent.quiz.view_bundel_question')
  	 		->with('data',$data)
        ->with('id',$id)
  	 		->with('msg',$msg);
  }


   public function addToCollectorQuiz(){

     $id = $_REQUEST['id'];

     $quiz_items = array();
    $quiz_items = $_SESSION['quiz_que'];

    array_push($quiz_items, $id);
    $_SESSION['quiz_que'] = $quiz_items;
    
    echo 1;


  }


  public function DeleteFromCollectorQuiz(){

     $id = $_REQUEST['id'];

    $quiz_items = array();
    $quiz_items = $_SESSION['quiz_que'];
    

    if (($key=array_search($id, $quiz_items)) !== false) {
          unset($quiz_items[$key]);

      }
    $_SESSION['quiz_que'] = $quiz_items;

    echo 1;



  }



 public function viewQuizCategoryAlbums(){

     $cat = $_REQUEST['cat'];   

  $data = DB::select("select *,count(e.id) as count from exam e,exam_question q where e.age_group_id = '$cat' and e.id = q.exam_id group by q.exam_id");

    return view('parent.quiz.Category_Q_Bundels')
            ->with('quiz',$data )
            ->with('c',$cat);

 }


  public function searchQuetionBox(){

   $cat = $_REQUEST['cat'];  
   $key = $_REQUEST['search']; 

     $data = DB::select("
   select *,count(e.id) as count from exam e,exam_question q where e.age_group_id = '$cat' and e.id = q.exam_id and e.name like '%$key%' group by q.exam_id ");

    return view('parent.quiz.Category_Q_Bundels')
            ->with('quiz',$data )
            ->with('c',$cat);


  }

   public function searchAllQuetionBox(){

       $key = $_REQUEST['search']; 


        $data = DB::select("
   select *,count(e.id) as count from exam e,exam_question q where e.id = q.exam_id and e.name like '%$key%' group by q.exam_id ");

    return view('parent.quiz.all_bundels')
            ->with('quiz',$data);
           


  }














    
}
