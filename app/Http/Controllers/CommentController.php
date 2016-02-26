<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class CommentController extends Controller
{
   public function story_comment(){


   	 $id = $_REQUEST['id'];
 	 $pid = $_SESSION['USERID'];
 	 $comment = $_REQUEST['comment'];

 		 DB::statement(DB::raw(
                       "INSERT INTO  comment12(pid,text,item_id,type,date)   values ('$pid','$comment','$id','story',now()) "));  

    echo 1;

   }

   public function video_comment(){

   	$id = $_REQUEST['id'];
    $pid = $_SESSION['USERID'];
    $comment = $_REQUEST['comment'];

         DB::statement(DB::raw(
                       "INSERT INTO  comment12(pid,text,item_id,type,date)   values ('$pid','$comment','$id','video',now()) "));  

    echo 1;
   }
}
