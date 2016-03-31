<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Classes\UploadVideoUtils;
use DB;

class Test extends Controller
{
	
	public function testing(){

		$story_text = '';
       $something = DB::table('story')->select('path')->where('id', '=', 1)->get();
        

        print_r($something);

        echo $something[0]->path;




        $story_file_path =  substr($something[0]->path, 1);

        echo $story_file_path;


        $myfile = fopen($story_file_path, "r") or die("Unable to open file!");
        $story_text = fread($myfile,filesize($story_file_path));
        fclose($myfile);

        echo $story_text;
	}
}
