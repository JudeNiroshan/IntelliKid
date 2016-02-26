<?php


namespace App\observer;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;


 interface Observe
{
 	function update();

}


?>