<?php
/*
* @author : A.H.A.T.Dias
* @desc : Concreate class Audio
* @created : 30/04/2016
*/
namespace App\observer;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
include_once 'Observe.php';

 class Audio implements Observe
{
	private $date;
	private $c_id;

    function __construct($date,$c_id) {
    	$this->date = $date;
    	$this->c_id = $c_id;
    	}

    public function update(){
      
    	 $u_id   = $_SESSION['USERID'];



      $audio_items = array();
      $audio_items = $_SESSION['audio_que'];

		  sleep(2);

        foreach($this->c_id as $c_id){

    	 		DB::statement(DB::raw("INSERT INTO  shedule(fk_parent_id,sheduleDateTime,dueTime,fk_child_id,content_id) values('$u_id',CURDATE(),'$this->date','$c_id','2')"));  

           $lastInsertedID = DB::select(" SELECT id FROM shedule ORDER BY id DESC LIMIT 1 ");
    		   $lastID =  $lastInsertedID[0]->id;

      foreach($audio_items as $sid){
    		   DB::statement(DB::raw("INSERT INTO  audio_shedule(shedule_id,audio_id,isActive)  values ('$lastID','$sid','yes')")); 

      }
    }
}



}


?>