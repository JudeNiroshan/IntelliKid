<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Classes\UploadVideoUtils;

class Test extends Controller
{
	
	public function testing(){
		 echo "Testing bro";

		 $some1 = new UploadVideoUtils();

		 $some1->isNullOrEmptyString("LOL");

		 echo "done";
	}
}
