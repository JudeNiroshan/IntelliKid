<?php

namespace App\Classes\uploaders;

class UploadVideoUtils{
	public static function isNullOrEmptyString($yourStr){
		
		//Get the AbstractFactory
		$Factory = FactoryProducer::getFactory("upload");
		//Get the Uploader
		$uploader = $Factory->getUploader("question");
		//Dynamic Uploader; uploading...
		$uploader->upload();

	}
}