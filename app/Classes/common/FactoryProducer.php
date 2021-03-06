<?php

namespace App\Classes\common;

use App\Classes\uploaders\UploadFactory;
use App\Classes\schedule\ScheduleFactory;

/**
* @author : Jude Niroshan
* @desc : This class will use to make different factories that has extended AbstractFactory class.
* @created : 22/02/2016
*/

class FactoryProducer{
	
	public static function getFactory($requesting_factory){

		if($requesting_factory == null || trim($requesting_factory) == ''){
			return null;
		}	



		if(strtolower(trim($requesting_factory)) == "upload"){

			return new UploadFactory();

		}


		if(strtolower(trim($requesting_factory)) == "schedule"){

			return new ScheduleFactory();

		}

		/*** Sorry dude, no matching factories for you! ***/
		return null;
	}
}