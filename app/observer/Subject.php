<?php

namespace App\observer;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
include_once 'Observe.php';

  class Subject 
{
    private static $que = array();

	public  function __construct() { }

	public  function add($observer){
	
		 array_push(self::$que,$observer);
		
	}

	 public  function notify(){

     foreach(self::$que as $aaa){
     $aaa->update($this);
 		}

 	}

 	




}


?>