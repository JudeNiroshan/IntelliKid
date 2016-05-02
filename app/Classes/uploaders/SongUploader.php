<?php

namespace App\Classes\uploaders;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\UploadSongController;
use App\Classes\validators\ContentValidator;
use App\Classes\validators\SongValidator;
use App\Classes\common\UploadConstants;
use DB;

/**
* @author : Jude Niroshan
* @desc : Implementations for uploading songs/audio to the system
* @created : 22/02/2016
*/

class SongUploader implements Uploader{
	
	//@Override
	function upload($request){

        $validator = new ContentValidator(new SongValidator());

        $validState  = $validator->doValidate($request);

        switch ($validState) {

            case UploadConstants::$SONG_FILE_NOT_ATTACHED_TO_REQUEST:
            $reason = "Audio file is not available";
            return UploadSongController::loadWithFailedReason($reason); break;

            case UploadConstants::$IMAGE_FILE_NOT_ATTACHED_TO_REQUEST:
            $reason = "Image file is not available";
            return UploadSongController::loadWithFailedReason($reason); break; 

            case UploadConstants::$FILE_NAME_NOT_ATTACHED_TO_REQUEST:
            $reason = "Audio file name is not available";
            return UploadSongController::loadWithFailedReason($reason); break; 

            case UploadConstants::$INVALID_SONG_FORMAT:
            $reason = "Invalid audio file format. Please use only .mp3/.ogg/.wav";
            return UploadSongController::loadWithFailedReason($reason); break; 

            case UploadConstants::$INVALID_IMAGE_FORMAT:
            $reason = "Invalid image format. Please use only .jpeg/.jpg/.png";
            return UploadSongController::loadWithFailedReason($reason); break; 

            case UploadConstants::$FILE_ALREADY_EXISTS:
            $reason = "File already exists";
            return UploadSongController::loadWithFailedReason($reason); break; 

        }

		$selected_subject = $request->input('subject');
        $selected_age = $request->input('ageCategory');
		$file = $request->file('songFile');
        $img_file = $request->file('songImageFile');

        $ext_song = explode('.', $file->getClientOriginalName());//explode file name from dot(.)
        $song_extension = end($ext_song); //store extensions in the variable

        $user_id = 100;
        $name = $request->filename;

        $img_file_path = "assets\uploads\\audio\img\\";
        $img_file->move(public_path() . '\\' . $img_file_path, str_replace(' ', '_', $img_file->getClientOriginalName()));


        $destinationPath = "assets\uploads\audio\\";
        $temp_id = DB::table('content_type')->select('id')->where('type', '=', 'audio')->get();
        $content_type_id = $temp_id[0]->id;
        $timestamp = date('y-m-d H:i:s');
        $content_id = DB::table('content')->insertGetId(array('contenttypeid' => $content_type_id, 'creator' => $user_id, 'datetime' => $timestamp));

        $file->move(public_path() . '\\' . $destinationPath, str_replace(' ', '_', $file->getClientOriginalName()));

        DB::table('audio')->insert(
            array(
                'contentid' => $content_id, 
                'name' => $name,
                'path' => $destinationPath. str_replace(' ', '_', $file->getClientOriginalName()),
                'img_path' => $img_file_path. str_replace(' ', '_', $img_file->getClientOriginalName()),
                'format' => $song_extension,
                'subjectid' => $selected_subject,
                'agegroupid' => $selected_age,
                'likes' => 1,
                'totalviews' => 1,
                'active' => 1
                ));              

        $msg = "File has successfully uploaded";

        $subjects = DB::table('subject')->get();
        $age_groups = DB::table('age_group')->get();

        $path_list_for_name = DB::table('audio')->where('active', '=', '1')->get();
        $songs = array();

        foreach ($path_list_for_name as $row) {
            $song_tile_obj = array('name' => $row->name,
                'path' => $row->path,
                'img_path' => $row->img_path);

            array_push($songs, $song_tile_obj);
        }

        return view('unicon_admin.uploadAudio')
        ->with('sub',$subjects)
        ->with('agecat', $age_groups)
        ->with('title','Dashboard')
        ->with('msg', $msg)
        ->with('gallery_data', $songs);

        
	}
}