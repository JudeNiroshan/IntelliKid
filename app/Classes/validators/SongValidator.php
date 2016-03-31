<?php

namespace App\Classes\validators;

use App\Classes\common\UploadConstants;
use DB;

/**
* @author : Jude Niroshan
* @desc : Validation for song upload is done in this class
* @created : 22/02/2016
*/

class SongValidator {

	//@Override
    function validate($request){

		$file = $request->file('songFile');
        $img_file = $request->file('songImageFile');
		$name = $request->filename;

		if($file == null){

			return UploadConstants::$SONG_FILE_NOT_ATTACHED_TO_REQUEST;
		}

		if($img_file == null){

			return UploadConstants::$IMAGE_FILE_NOT_ATTACHED_TO_REQUEST;
		}

		if($name == null){

			return UploadConstants::$FILE_NAME_NOT_ATTACHED_TO_REQUEST;
		}


		$ext_song = explode('.', $file->getClientOriginalName());//explode file name from dot(.)
        $song_extension = end($ext_song); //store extensions in the variable

        $ext_image = explode('.', $img_file->getClientOriginalName());//explode file name from dot(.) 
        $img_extension = end($ext_image); //store extensions in the variable

		if( !(in_array($song_extension, UploadConstants::$g_valid_audio_extensions))){

			return UploadConstants::$INVALID_SONG_FORMAT;

		}else if( !(in_array($img_extension, UploadConstants::$g_valid_img_extensions))){

			return UploadConstants::$INVALID_IMAGE_FORMAT;

		}

		$path_list_for_name = DB::table('audio')->select('path')->where('name', '=', $name)->get();

        foreach ($path_list_for_name as $row) {

           	$path_for_name = $row->path;
           	print_r($path_for_name);
            $destinationPath = "\assets\uploads\\video\\";// 
            print_r($file->getClientOriginalName());

            if($destinationPath. $file->getClientOriginalName() == $path_for_name){

             	return UploadConstants::$FILE_ALREADY_EXISTS;
               	
            }
         }//End of Loop


         return UploadConstants::$VALID_UPLOAD;
	}

}