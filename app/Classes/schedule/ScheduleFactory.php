<?php

namespace App\Classes\schedule;

use App\Classes\common\AbstractFactory;

/**
* @author : Achala Dias
* @desc : This is the base Factory that produces the schedule objects
* @created : 24/03/2016
*/

class ScheduleFactory extends AbstractFactory {
	
	//@Override
	function getUploader($upload_type){

		if($upload_type == null || trim($upload_type) == ''){
			return null;
		}	


		return null;

	}



	public function CheckMan($class){

		if($class == null || trim($class) == ''){
			return null;
		}	


		if(strtolower(trim($class)) == "schedulevalidation"){

			return new ScheduleValidations();

		}

		return null;

	}
}