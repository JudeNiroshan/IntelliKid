<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;


class UploadSongController extends Controller
{
    public function loadWithDefaultData(){
    	$subjects = DB::table('subject')->get();

    	$age_groups = DB::table('age_group')->get();

        $path_list_for_name = DB::table('audio')->where('active', '=', '1')->get();
        $songs = array();
        foreach ($path_list_for_name as $row) {
            $song_tile_obj = array('name' => $row->name,
                                    'path' => strstr($row->path, 'assets'),
                                    'img_path' => strstr($row->img_path, 'assets'),
                                    'length' => $row->length );
            array_push($songs, $song_tile_obj);
        }

        
       
    	return view('unicon_admin.uploadAudio')
    			->with('sub',$subjects)
    			->with('agecat', $age_groups)
    			->with('title','Upload | Songs')
                ->with('gallery_data', $songs);
    }

    public static function loadWithFailedReason($fail_reason){


    	$subjects = DB::table('subject')->get();

    	$age_groups = DB::table('age_group')->get();

        $path_list_for_name = DB::table('audio')->where('active', '=', '1')->get();
        $songs = array();
        foreach ($path_list_for_name as $row) {
            $song_tile_obj = array('name' => $row->name,
                                    'path' => strstr($row->path, 'assets'),
                                    'img_path' => strstr($row->img_path, 'assets'),
                                    'length' => $row->length );
            array_push($songs, $song_tile_obj);
        }

		return view('unicon_admin.uploadAudio')
    			->with('sub',$subjects)
    			->with('agecat', $age_groups)
    			->with('error', $fail_reason)
    			->with('title','Upload | Songs')
                ->with('gallery_data', $songs);	
    	
    }

    public static function loadWithSelectedCrit(){
        $id = $_GET['id'];

        echo 'hit to server side';
    }
}
