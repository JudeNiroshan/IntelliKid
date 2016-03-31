<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

/**
* @author : Jude Niroshan
* @desc : this class is responsible for handling story upload related functions
* @created : 11/02/2016
*/

class UploadStoryController extends Controller
{
    public static function loadWithDefaultData(){

    	$subjects = DB::table('subject')->get();
    	$age_groups = DB::table('age_group')->get();

        $path_list_for_name = DB::table('story')->where('active', '=', '1')->get();
        $story = array();
        foreach ($path_list_for_name as $row) {

            $temp_id = DB::table('story_image')->where('storyid', '=', $row->id)->get();
            $story_img = $temp_id[0]->path;

            $story_tile_obj = array(
                                    'id' => $row->id,
                                    'name' => $row->name,
                                    'path' => strstr($story_img, 'assets')
                                    );
            array_push($story, $story_tile_obj);
        }

    	return view('unicon_admin.uploadStory')
    			->with('sub',$subjects)
    			->with('agecat', $age_groups)
    			->with('title','Upload | Story')
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

    public static function deleteStory(Request $request){

        $sql_query = 'UPDATE story SET active=0 WHERE id = ' . $request->Story_ID;
        DB::Statement($sql_query);
        return "success";
    }

    public static function loadStoryForEditing(Request $request){

        $story_id = $request->Story_ID;

        $subjects = DB::table('subject')->get();
        $age_groups = DB::table('age_group')->get();
        $story_name = DB::table('story')->select('name')->where('id', '=', $story_id)->get();
        $something = DB::table('story')->select('path')->where('id', '=', $story_id)->get();

        $story_file_path =  substr($something[0]->path, 1);


        $sel_sub = DB::table('story')->select('subjectid')->where('id', '=', $story_id)->get();
        $sel_age = DB::table('story')->select('agegroupid')->where('id', '=', $story_id)->get();

        $story_text = '';
        
        $myfile = fopen($story_file_path, "r") or die("Unable to open file!");
        $story_text = fread($myfile,filesize($story_file_path));
        fclose($myfile);

        $story_text = strip_tags($story_text);

        $ret_arr = array(
                        'sub' => $subjects, 
                        'agecat' => $age_groups, 
                        'story_name' => $story_name, 
                        'story_text' => $story_text, 
                        'story_id' => $story_id
                        
                        );

        return $ret_arr;
    }

    public static function saveStoryEdits(Request $request){

        $story_id = $request->story_id;
        $story_name = $request->story_name;

        $story = $request->story_text;
        $subject = $request->subject;
        $ageCategory = $request->ageCategory;


        if($story_name == null || $story_name == ''){

            $reason = "Story name cannot be empty";
            return UploadStoryController::retEditStatus("false", $reason);

        }else if($story == null || $story == ''){

            $reason = "Story cannot be empty";
            return UploadStoryController::retEditStatus("false", $reason);
        }


        $something = DB::table('story')->select('path')->where('id', '=', $story_id)->get();

        $story_file_path =  substr($something[0]->path, 1);

        $var=fopen($story_file_path,"w");
        fwrite($var, $story);
        fclose($var);

        DB::table('story')
            ->where('id', $story_id)
            ->update(['name' => $story_name, 'subjectid' => $subject, 'agegroupid' => $ageCategory]);

        return UploadStoryController::retEditStatus("true", "Successfully saved");
    }


    public static function retEditStatus($isSuccess, $message){

        $subjects = DB::table('subject')->get();
        $age_groups = DB::table('age_group')->get();
        
        $path_list_for_name = DB::table('story')->where('active', '=', '1')->get();
        $story = array();
        foreach ($path_list_for_name as $row) {

            $temp_id = DB::table('story_image')->where('storyid', '=', $row->id)->get();
            $story_img = $temp_id[0]->path;

            $story_tile_obj = array(
                                    'id' => $row->id,
                                    'name' => $row->name,
                                    'path' => strstr($story_img, 'assets')
                                    );
            array_push($story, $story_tile_obj);
        }


        
        if($isSuccess == "true"){

            return view('unicon_admin.uploadStory')
                ->with('sub',$subjects)
                ->with('agecat', $age_groups)
                ->with('edit_Story_Success', $message)
                ->with('title','Upload | Story')
                ->with('gallery_data', $story);
        }else{

            return view('unicon_admin.uploadStory')
                ->with('sub',$subjects)
                ->with('agecat', $age_groups)
                ->with('edit_Story_fail', $message)
                ->with('title','Upload | Story')
                ->with('gallery_data', $story);
        }
        
    }
}
