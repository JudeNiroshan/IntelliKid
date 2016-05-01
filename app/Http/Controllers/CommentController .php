<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class CommentController extends Controller
{
   /*
   * @author : A.H.A.T.Dias
   * @desc : insert user added comment to the story table
   * @created : 22/02/2016
   */
   public function storyComment(){


   $id      = $_REQUEST['id'];
 	 $pid     = $_SESSION['USERID'];
 	 $comment = $_REQUEST['comment'];

 		 DB::statement(DB::raw(
                       "INSERT INTO  comment(parent_id,item_id,type_id,comment_date,text)   values('$pid','$id',3,now(),'$comment')"));  

    echo 1;

   }

    /*
   * @author : A.H.A.T.Dias
   * @desc : insert user added comment to the video table
   * @created : 22/02/2016
   */
   public function videoComment(){

   	$id      = $_REQUEST['id'];
    $pid     = $_SESSION['USERID'];
    $comment = $_REQUEST['comment'];

         DB::statement(DB::raw(
                       "INSERT INTO  comment(parent_id,item_id,type_id,comment_date,text)   values('$pid','$id',1,now(),'$comment')"));  

    echo 1;
   }
}
