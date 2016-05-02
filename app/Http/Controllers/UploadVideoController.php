<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;



class UploadVideoController extends Controller
{


    public function loadWithDefaultData(){
    	$subjects = DB::table('subject')->get();

    	$age_groups = DB::table('age_group')->get();

        $path_list_for_name = DB::table('video')->where('active', '=', '1')->get();
        $videos = array();
        foreach ($path_list_for_name as $row) {
            $video_tile_obj = array('id' => $row->id,
                                    'name' => $row->name,
                                    'path' => $row->path,
                                    'img_path' => $row->img_path);
            array_push($videos, $video_tile_obj);
        }

        
       
    	return view('unicon_admin.uploadVideo')
    			->with('sub',$subjects)
    			->with('agecat', $age_groups)
    			->with('title','Upload | Videos')
                ->with('gallery_data', $videos);
    }

    public static function loadWithFailedReason($fail_reason){


    	$subjects = DB::table('subject')->get();
    	$age_groups = DB::table('age_group')->get();
        $videos = array();
        $path_list_for_name = DB::table('video')->where('active', '=', '1')->get();
        
        foreach ($path_list_for_name as $row) {
            $video_tile_obj = array('id' => $row->id,
                                    'name' => $row->name,
                                    'path' => $row->path,
                                    'img_path' => $row->img_path,
                                    );
            array_push($videos, $video_tile_obj);
        }

		return view('unicon_admin.uploadVideo')
    			->with('sub',$subjects)
    			->with('agecat', $age_groups)
    			->with('error', $fail_reason)
                ->with('gallery_data', $videos)
    			->with('title','Upload | Videos');	
    	
    }


    public static function deleteVideo(Request $request){

        $sql_query = 'UPDATE video SET active=0 WHERE id = ' . $request->V_ID;
        DB::Statement($sql_query);
        return "success";
    }


    public static function loadVideoForEditing(Request $request){

        $video_id = $request->V_ID;

        $subjects = DB::table('subject')->get();
        $age_groups = DB::table('age_group')->get();
        $video_name = DB::table('video')->select('name')->where('id', '=', $video_id)->get();

        $sel_sub = DB::table('video')->select('subjectid')->where('id', '=', $video_id)->get();
        $sel_age = DB::table('video')->select('agegroupid')->where('id', '=', $video_id)->get();

        $ret_arr = array(
                        'sub' => $subjects, 
                        'agecat' => $age_groups, 
                        'sel_sub' => $sel_sub, 
                        'sel_age' => $sel_age, 
                        'v_id' => $video_id, 
                        'video_name' => $video_name 
                        
                        );

        return $ret_arr;

    }


    public function saveVideoEdits(Request $request){

        $video_id = $request->video_id;

        $video_name = $request->video_name;
        //echo "$video_name    ";

        $subject = $request->subject;
        //echo "$subject" . "\r\n";
        $ageCategory = $request->ageCategory;
        //echo "$ageCategory" . "\r\n";


        if($video_name == null || $video_name == ''){

            $reason = "Video name cannot be empty";
            return UploadVideoController::retEditStatus("false", $reason);
        }

        DB::table('video')
            ->where('id', $video_id)
            ->update(['name' => $video_name, 'subjectid' => $subject, 'agegroupid' => $ageCategory]);


        return UploadVideoController::retEditStatus("true", "Successfully saved");
    }


    public static function retEditStatus($isSuccess, $message){

        $subjects = DB::table('subject')->get();
        $age_groups = DB::table('age_group')->get();

        $path_list_for_name = DB::table('video')->where('active', '=', '1')->get();
        $videos = array();
        foreach ($path_list_for_name as $row) {
            $video_tile_obj = array('id' => $row->id,
                                    'name' => $row->name,
                                    'path' => $row->path,
                                    'img_path' => $row->img_path, 'assets');
            array_push($videos, $video_tile_obj);
        }

        
        if($isSuccess == "true"){

            return view('unicon_admin.uploadVideo')
                ->with('sub',$subjects)
                ->with('agecat', $age_groups)
                ->with('edit_V_Success', $message)
                ->with('title','Upload | Videos')
                ->with('gallery_data', $videos);
        }else{

            return view('unicon_admin.uploadVideo')
                ->with('sub',$subjects)
                ->with('agecat', $age_groups)
                ->with('edit_V_fail', $message)
                ->with('title','Upload | Videos')
                ->with('gallery_data', $videos);
        }
        
    }

}