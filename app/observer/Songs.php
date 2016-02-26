<?php

namespace App\observer;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
include_once 'Observe.php';

 class Songs implements Observe
{
	private $date;
	private $c_id;

    function __construct($date,$c_id) {
    	$this->date = $date;
    	$this->c_id = $c_id;
    	}

    public function update(){
    	 $u_id   = $_SESSION['USERID'];



      $story_items = array();
      $story_items = $_SESSION['story_que'];

		
               foreach($this->c_id as $c_id){
    	 		DB::statement(DB::raw("INSERT INTO  shedule(sheduleCategory,fk_parent_id,sheduleDateTime,dueTime,fk_child_id)   values ('story','$u_id',CURDATE(),'$this->date','$c_id')"));  

    		   $lastInsertedID = DB::select("select id from shedule where sheduleCategory='story' and sheduleDateTime=CURDATE() and fk_parent_id='$u_id' and fk_child_id='$c_id'");
    		   $lastID =  $lastInsertedID[0]->id;
               foreach($story_items as $sid){
    		   DB::statement(DB::raw("INSERT INTO  story_schedule(fk_schedule_id,fk_story_id)   values ('$lastID','$sid')")); 

    }
}
}



}


?>