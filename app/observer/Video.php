<?php

/*
* @author : A.H.A.T.Dias
* @desc : Concreate class of the observer design pattern
* @created : 22/02/2016
*/

namespace App\observer;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
//use observer;
include_once 'Observe.php';

 class Video implements Observe
{
	

  private $date;
	private $c_id;

    function __construct($date,$c_id) {
    	$this->date = $date;
    	$this->c_id = $c_id;
    	}

    public function update(){

    		   $u_id   = $_SESSION['USERID'];

    		   $vedio_items = array();
           $vedio_items = $_SESSION['video_que'];

            
    		  
          foreach($this->c_id as $c_id){

    		   DB::statement(DB::raw("INSERT INTO  shedule(fk_parent_id,sheduleDateTime,dueTime,fk_child_id,content_id)   values ('$u_id',CURDATE(),'$this->date','$c_id','1')"));  
    		   
               $lastInsertedID = DB::select(" SELECT id FROM shedule ORDER BY id DESC LIMIT 1 ");
               	   $lastID =  $lastInsertedID[0]->id;

           foreach($vedio_items as $vid){
    		   DB::statement(DB::raw("INSERT INTO  video_shedule(shedule_id,video_id,isActive)  values ('$lastID','$vid','yes')")); 
                  }
                }
    		  
    }



}


?>