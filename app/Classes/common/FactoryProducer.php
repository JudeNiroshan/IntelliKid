<?php

namespace App\Classes\common;

use App\Classes\uploaders\UploadFactory;

/**
* @author : Jude Niroshan
* @desc : This class will use to make different factories that has extended AbstractFactory class.
* @created : 22/02/2016
*/

class FactoryProducer{
	
	/**
	* @desc  : This methods is used to get a custom factories in the application. This will not include the built-in factories.
	* @return : Upload
	*/
	public static function getFactory($requesting_factory){

		if($requesting_factory == null || trim($requesting_factory) == ''){
			return null;
		}	



		if(strtolower(trim($requesting_factory)) == "upload"){

			return new UploadFactory();

		}

		/*** Sorry dude, no matching factories for you! ***/
		return null;
	}
}