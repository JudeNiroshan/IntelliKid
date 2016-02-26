<?php

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

    		   DB::statement(DB::raw("INSERT INTO  shedule(sheduleCategory,fk_parent_id,sheduleDateTime,dueTime,fk_child_id)   values ('video','$u_id',CURDATE(),'$this->date','$c_id')"));  
    		   $lastInsertedID = DB::select("select id from shedule where sheduleCategory='video' and sheduleDateTime=CURDATE() and fk_parent_id='$u_id' and fk_child_id='$c_id' ");
    		   $lastID =  $lastInsertedID[0]->id;

               foreach($vedio_items as $vid){
    		   DB::statement(DB::raw("INSERT INTO  video_shedule(fk_shedule_id,fk_video_id,isActive)   values ('$lastID','$vid','yes')")); 
                  }
                }
    		  
    }



}


?>