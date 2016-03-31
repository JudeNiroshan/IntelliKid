<?php

namespace App\Classes\common;


/**
* @author : Jude Niroshan
* @desc : This class contains the glabal variables that will be used in all upload related classes
* @created : 22/02/2016
*/

class UploadConstants {
	    
	    static $g_valid_img_extensions = array("jpeg", "jpg", "png", "JPG", "JPEG", "PNG");
		static $g_valid_video_extensions = array("mp4", "MP4", "ogg", "OGG", "webm", "WEBM");
		static $g_valid_audio_extensions = array("mp3", "MP3", "wav", "WAV", "ogg", "OGG");
	
		static $VALID_UPLOAD 										= 200;
		///static $GENERAL_ERROR 									= 800;

		//Error codes used for upload process(Internal usage only)
		static $INVALID_VIDEO_FORMAT 								= 10;
		static $INVALID_IMAGE_FORMAT 								= 20;
		static $FILE_ALREADY_EXISTS 								= 30;
		static $VIDEO_FILE_NOT_ATTACHED_TO_REQUEST 					= 40;
		static $IMAGE_FILE_NOT_ATTACHED_TO_REQUEST 					= 50;
		static $FILE_NAME_NOT_ATTACHED_TO_REQUEST 					= 60;

		static $INVALID_SONG_FORMAT 								= 70;
		static $SONG_FILE_NOT_ATTACHED_TO_REQUEST 					= 80;
		static $STORY_NOT_ATTACHED_TO_REQUEST 						= 90;

		static $QUESTION_NOT_ATTACHED_TO_REQUEST 					= 100;
		static $ANSWER_NOT_ATTACHED_TO_REQUEST 						= 110;
		static $QUESTION_ALREADY_EXIST								= 120;

}