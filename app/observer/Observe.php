<?php

/*
* @author : A.H.A.T.Dias
* @desc : Observer interface(abstract class)
* @created : 22/02/2016
*/
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