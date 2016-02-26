<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Classes\UploadVideoUtils;
use App\observer\Subject;
use App\observer\Video;
use App\observer\Songs;
use App\observer\Slton;



class Test extends Controller
{

	
	
	public function testing(){
		 echo "Testing bro";

		 $some1 = new UploadVideoUtils();

		 $some1->isNullOrEmptyString("LOL");

		 echo "done";
	}


 public function r1(){

 	$subject   = new Subject();

 	$video  = new Video();
 	$song  = new Songs();

	$subject->add($video);
	$subject->add($song);
 	$subject->notify();
 		

   }
 

   



}
