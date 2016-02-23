<?php

namespace App\Classes\uploaders;

use App\Classes\common\AbstractFactory;

/**
* @author : Jude Niroshan
* @desc : This is the base Factory that produces the upload objects
* @created : 22/02/2016
*/

class UploadFactory extends AbstractFactory {
	
	//@Override
	function getUploader($upload_type){

		if($upload_type == null || trim($upload_type) == ''){
			return null;
		}	


		if(strtolower(trim($upload_type)) == "video"){

			return new VideoUploader();

		}else if(strtolower(trim($upload_type)) == "song"){

			return new SongUploader();

		}else if(strtolower(trim($upload_type)) == "story"){

			return new StoryUploader();

		}else if(strtolower(trim($upload_type)) == "question"){
			
			return new QuestionUploader();
		}

		return null;

	}
}