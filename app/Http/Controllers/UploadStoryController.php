<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

/**
* @author : Jude Niroshan
* @desc : this class is responsible for handling story upload related functions
* @created : 
*/

class UploadStoryController extends Controller
{
    public function loadWithDefaultData(){
    	$subjects = DB::table('subject')->get();

    	$age_groups = DB::table('age_group')->get();

        $path_list_for_name = DB::table('story')->where('active', '=', '1')->get();
        $story = array();
        foreach ($path_list_for_name as $row) {

            $temp_id = DB::table('story_image')->where('storyid', '=', $row->id)->get();
            $story_img = $temp_id[0]->path;

            $story_tile_obj = array('name' => $row->name,
                                    'path' => strstr($story_img, 'assets')
                                    );
            array_push($story, $story_tile_obj);
        }

        
       
    	return view('unicon_admin.uploadStory')
    			->with('sub',$subjects)
    			->with('agecat', $age_groups)
    			->with('title','Dashboard')
                ->with('gallery_data', $story);
    }


    public static function writeToFile($fileName, $story){
        if($story === NULL){
            return null;
        }
        if($fh = fopen('assets\uploads\stry\\'.$fileName.'.txt','w')){
           
            fwrite($fh, $story,1024);
            fclose($fh);
            return "SUCCESS";
        }

        return null;
    }

    public static function loadWithFailedReason($fail_reason){


        $subjects = DB::table('subject')->get();

        $age_groups = DB::table('age_group')->get();

        $path_list_for_name = DB::table('story')->where('active', '=', '1')->get();
        $story = array();
        foreach ($path_list_for_name as $row) {

            $temp_id = DB::table('story_image')->where('storyid', '=', $row->id)->get();
            $story_img = $temp_id[0]->path;

            $story_tile_obj = array('name' => $row->name,
                'path' => strstr($story_img, 'assets')
                );
            array_push($story, $story_tile_obj);
        }

        return view('unicon_admin.uploadQuestion')
                ->with('sub',$subjects)
                ->with('agecat', $age_groups)
                ->with('error', $fail_reason)
                ->with('title','Upload | Story')
                ->with('gallery_data', $story); 
        
    }
}
