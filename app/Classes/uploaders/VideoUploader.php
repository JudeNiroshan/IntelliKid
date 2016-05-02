<?php

namespace App\Classes\uploaders;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\UploadVideoController;
use App\Classes\validators\ContentValidator;
use App\Classes\validators\VideoValidator;
use App\Classes\common\UploadConstants;
use DB;

/**
* @author : Jude Niroshan
* @desc : Implementations for uploading videos to the system
* @created : 22/02/2016
*/

class VideoUploader implements Uploader{
	
	//@Override
	function upload($request){


		$validator = new ContentValidator(new VideoValidator());

		$validState  = $validator->doValidate($request);

		switch ($validState) {

			case UploadConstants::$VIDEO_FILE_NOT_ATTACHED_TO_REQUEST:
            $reason = "Video file is not available";
            return UploadVideoController::loadWithFailedReason($reason); break;

            case UploadConstants::$IMAGE_FILE_NOT_ATTACHED_TO_REQUEST:
            $reason = "Image file is not available";
            return UploadVideoController::loadWithFailedReason($reason); break;	

            case UploadConstants::$FILE_NAME_NOT_ATTACHED_TO_REQUEST:
            $reason = "Video file name is not available";
            return UploadVideoController::loadWithFailedReason($reason); break;	

            case UploadConstants::$INVALID_VIDEO_FORMAT:
            $reason = "Invalid video file format. Please use only .mp4/.ogg/.webm";
            return UploadVideoController::loadWithFailedReason($reason); break;	

            case UploadConstants::$INVALID_IMAGE_FORMAT:
            $reason = "Invalid image format. Please use only .jpeg/.jpg/.png";
            return UploadVideoController::loadWithFailedReason($reason); break;	

            case UploadConstants::$FILE_ALREADY_EXISTS:
            $reason = "File already exists";
            return UploadVideoController::loadWithFailedReason($reason); break;	

        }

        $selected_subject = $request->input('subject');
        $selected_age = $request->input('ageCategory');
        $file = $request->file('videoFile');
        $img_file = $request->file('videoImageFile');

        $ext_video = explode('.', $file->getClientOriginalName());//explode file name from dot(.)
        $video_extension = end($ext_video); //store extensions in the variable


        $user_id = 100;
        $name = $request->filename;

        $img_file_path = "assets\uploads\\video\img\\";
        $img_file->move(public_path() . '\\' . $img_file_path, $img_file->getClientOriginalName());


        $destinationPath = "assets\uploads\\video\\";

        $temp_id = DB::table('content_type')->select('id')->where('type', '=', 'video')->get();
        $content_type_id = $temp_id[0]->id;
        $timestamp = date('y-m-d H:i:s');
        $content_id = DB::table('content')->insertGetId(array('contenttypeid' => $content_type_id, 'creator' => $user_id, 'datetime' => $timestamp)); 
        $file->move(public_path() . '\\' . $destinationPath, $file->getClientOriginalName());

        DB::table('video')->insert(
            array(
                'contentid' => $content_id, 
                'name' => $name,
                'path' => $destinationPath. $file->getClientOriginalName(),
                'img_path' => $img_file_path. $img_file->getClientOriginalName(),
                'format' => $video_extension,
                'subjectid' => $selected_subject,
                'agegroupid' => $selected_age,
                'likes' => 1,
                'totalviews' => 1,
                'active' => 1
                ));              

        $msg = "File has successfully uploaded";


        /*********** SUCCESS REDIRECT *************/
        $subjects = DB::table('subject')->get();
        $age_groups = DB::table('age_group')->get();
        $path_list_for_name = DB::table('video')->where('active', '=', '1')->get();
        $videos = array();

        foreach ($path_list_for_name as $row) {
            $video_tile_obj = array(
                'id' => $row->id,
                'name' => $row->name,
                'path' => strstr($row->path, 'assets'),
                'img_path' => strstr($row->img_path, 'assets'));

            array_push($videos, $video_tile_obj);
        }

        return view('unicon_admin.uploadVideo')
        ->with('sub',$subjects)
        ->with('agecat', $age_groups)
        ->with('title','Dashboard')
        ->with('msg', $msg)
        ->with('gallery_data', $videos);
        
        /*********** END SUCCESS REDIRECT *************/

       }

   }