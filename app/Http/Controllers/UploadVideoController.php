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
            $video_tile_obj = array('name' => $row->name,
                                    'path' => strstr($row->path, 'assets'),
                                    'img_path' => strstr($row->img_path, 'assets'),
                                    'length' => $row->length );
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
            $video_tile_obj = array('name' => $row->name,
                                    'path' => strstr($row->path, 'assets'),
                                    'img_path' => strstr($row->img_path, 'assets'),
                                    'length' => $row->length );
            array_push($videos, $video_tile_obj);
        }

		return view('unicon_admin.uploadVideo')
    			->with('sub',$subjects)
    			->with('agecat', $age_groups)
    			->with('error', $fail_reason)
                ->with('gallery_data', $videos)
    			->with('title','Upload | Videos');	
    	
    }
}